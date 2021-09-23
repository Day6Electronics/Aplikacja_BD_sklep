<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ProductSearchForm;
use app\forms\AddressForm;
use app\transfer\Pages;

class ShopCtrl {

    private $ps_form;
    private $records;
    private $cart_items;
    private $address_form;
    private $pages;

    public function __construct() {
        $this->ps_form = new ProductSearchForm();
        $this->address_form = new AddressForm();
        $this->pages = new Pages();
    }

    public function validate() {
        if (ParamUtils::getFromRequest('sf_query') != NULL) {
            $this->ps_form->query = ParamUtils::getFromRequest('sf_query');
        } else {
            $this->ps_form->query = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
        }
        return !App::getMessages()->isError();
    }

    public function load_data() {
        $this->validate();

        if (is_numeric(ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji'))) {
            $this->pages->currentPage = intval(ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji'));
        } else {
            $this->pages->currentPage = 1;
        }

        $search_params = [];
        if (isset($this->ps_form->query) && strlen($this->ps_form->query) > 0) {
            $search_params['name[~]'] = '%' . $this->ps_form->query . '%';
            $search_params['category[~]'] = $this->ps_form->query . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["OR" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $this->pages->recNum = App::getDB()->count("product", $where);
        $this->pages->lastPage = ceil($this->pages->recNum / 10);

        if ($this->pages->currentPage > $this->pages->lastPage) {
            $this->pages->currentPage = 1;
        }

        $limit = 10;
        $from = ($this->pages->currentPage - 1) * $limit;

        $where ["ORDER"] = "name";
        $where ["LIMIT"] = [$from, $limit];

        try {
            $this->records = App::getDB()->select("product", [
                "id_product",
                "category",
                "name",
                "description",
                "prize",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
    }

    public function addProduct() {
        $this->load_cart();
        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $login = $_COOKIE["log"];
        if ($this->cart_items != NULL) {
            try {
                $isInCart = App::getDB()->has("cart", [
                    "id_product" => $id_product,
                    "cart_user" => $login
                ]);

                if ($isInCart) {
                    App::getDB()->update("cart", [
                        "quantity[+]" => 1
                            ], [
                        "id_product" => $id_product
                    ]);
                } else {
                    $data = App::getDB()->get("product", [
                        "name",
                        "prize"
                            ], [
                        "id_product" => $id_product
                    ]);

                    App::getDB()->insert("cart", [
                        "name" => $data['name'],
                        "quantity" => 1,
                        "prize" => $data['prize'],
                        "cart_user" => $login,
                        "status" => "open",
                        "id_product" => $id_product
                    ]);
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
        } else {
            try {
                $data = App::getDB()->get("product", [
                    "name",
                    "prize"
                        ], [
                    "id_product" => $id_product
                ]);

                App::getDB()->insert("cart", [
                    "name" => $data['name'],
                    "quantity" => 1,
                    "prize" => $data['prize'],
                    "cart_user" => $login,
                    "status" => "open",
                    "id_product" => $id_product
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
        }
    }

    public function deleteProduct() {
        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        try {
            App::getDB()->delete("cart", [
                "id_product" => $id_product
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
    }

    public function load_cart() {
        $login = $_COOKIE["log"];
        try {
            $this->cart_items = App::getDB()->select("cart", "*", [
                "cart_user" => $login,
                "status" => "open"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function updateCartValue() {
        $login = $_COOKIE["log"];
        try {
            $prizeQ = App::getDB()->select("cart", [
                "prize",
                "quantity",
                    ], [
                "cart_user" => $login,
                "status" => "open"
            ]);
            $cartValue = 0;
            foreach ($prizeQ as $pQ) {
                $cartValue = $cartValue + ($pQ['prize'] * $pQ['quantity']);
            }
            if ($cartValue == NULL) {
                $cartValue = 0;
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getSmarty()->assign('cartValue', $cartValue);
        return $cartValue;
    }

    public function buy() {
        $this->address_form->address = ParamUtils::getFromRequest('address');
        $this->address_form->email = ParamUtils::getFromRequest('email');
        $this->address_form->phone = ParamUtils::getFromRequest('phone');
        if (empty($this->address_form->address)) {
            Utils::addErrorMessage('Nie podano adresu dostawy');
        }
        if (empty($this->address_form->email)) {
            Utils::addErrorMessage('Nie podano adresu email');
        }
        if (empty($this->address_form->phone)) {
            Utils::addErrorMessage('Nie podano numeru telefonu');
        }
        if (App::getMessages()->isError())
            return false;
        
        $date = date("Y-m-d H:i:s");
        $login = $_COOKIE["log"];
        try {
            $id_user = App::getDB()->get("user", "id_user", [
                "login" => $login
            ]);
            App::getDB()->insert("orders", [
                "date" => $date,
                "address" => $this->address_form->address,
                "email" => $this->address_form->email,
                "phone" => $this->address_form->phone,
                "total" => $this->updateCartValue(),
                "id_user" => $id_user
            ]);
            $id_order = App::getDB()->get("orders", "id_order", [
                "date" => $date
            ]);
            App::getDB()->update("cart", [
                "status" => "closed",
                "id_order" => $id_order
                    ], [
                "cart_user" => $login,
                "status" => "open",
                "id_order" => NULL
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->redirectTo('shopShow');
    }

    public function action_shopShow() {
        if (isset($_COOKIE["log"])) {
            $this->updateCartValue();
        }
        App::getSmarty()->display('shopView.tpl');
    }

    public function action_search() {
        $this->load_data();
        $this->updateCartValue();
        //App::getSmarty()->assign('q_form', $this->q_form);
        App::getSmarty()->assign('searchForm', $this->ps_form);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->assign('pages', $this->pages);
        App::getSmarty()->display('productListView.tpl');
    }

    public function action_productListTable() {
        $this->load_data();
        $this->updateCartValue();
        //App::getSmarty()->assign('q_form', $this->q_form);
        App::getSmarty()->assign('searchForm', $this->ps_form);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->assign('pages', $this->pages);
        App::getSmarty()->display('productListViewTable.tpl');
    }

    public function action_addToCart() {
        $this->addProduct();
        App::getRouter()->redirectTo('cartShow');
    }

    public function action_cartShow() {
        $this->load_cart();
        $this->updateCartValue();
        App::getSmarty()->assign('total', 0);
        App::getSmarty()->assign('cart', $this->cart_items);
        App::getSmarty()->display('cartView.tpl');
    }

    public function action_deleteFromCart() {
        $this->deleteProduct();
        App::getRouter()->redirectTo('cartShow');
    }

    public function action_orderNew() {
        if (isset($_COOKIE["log"])) {
            $this->updateCartValue();
        }
        App::getSmarty()->assign('address_form', $this->address_form);
        App::getSmarty()->display('finalizeView.tpl');
    }

    public function action_finalizeOrder() {
        $this->buy();
    }

}

?>