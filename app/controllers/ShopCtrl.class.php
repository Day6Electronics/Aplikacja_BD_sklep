<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ProductSearchForm;
use app\forms\QuantityForm;

class ShopCtrl {

    private $ps_form;                                                           //formularz wyszukiwania
    private $records;
    private $q_form;                                                            //formularz ilości produktów

    public function __construct() {
        $this->ps_form = new ProductSearchForm();
        $this->q_form = new QuantityForm();
    }

    public function validate() {
        $this->ps_form->query = ParamUtils::getFromRequest('sf_query');

        return !App::getMessages()->isError();
    }

    public function load_data() {
       $this->validate();

        $search_params = [];
        if (isset($this->ps_form->query) && strlen($this->ps_form->query) > 0) {
            $search_params['name[~]'] = '%' . $this->ps_form->query . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "name";

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
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }
    
    public function checkLog(){
        if(isset($_SESSION[ 'log' ])){
            $this->log = $_SESSION[ 'log' ];
        }else{
            $this->log = '';
        }
    }
    
    public function validateIndx() {
        $this->ps_form->query = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function load_products() {
        $this->validateIndx();
        
        $search_params = [];
        if (isset($this->ps_form->query) && strlen($this->ps_form->query) > 0) {
            $search_params['category[~]'] = $this->ps_form->query . '%';
        }
        
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "name";

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
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function action_shopShow() {
        $this->checkLog();
        global $log;
        App::getSmarty()->assign('log', $this->log);
        App::getSmarty()->assign('q_form', $this->q_form);
        App::getSmarty()->display('shopView.tpl');
    }

    public function action_search() {
        $this->load_data();
        $this->checkLog();
        global $log;
        App::getSmarty()->assign('log', $this->log);
        App::getSmarty()->assign('q_form', $this->q_form);
        App::getSmarty()->assign('query', $this->ps_form->query);
        App::getSmarty()->assign('searchForm', $this->ps_form);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->display('productListView.tpl');
    }
    
    public function action_productList() {
        $this->load_products();
        $this->checkLog();
        global $log;
        App::getSmarty()->assign('log', $this->log);
        App::getSmarty()->assign('q_form', $this->q_form);
        App::getSmarty()->assign('query', $this->ps_form->query);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->display('productListView.tpl');
    }
}
?>