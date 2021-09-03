<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('shopShow');                                  //akcja domyślna
App::getRouter()->setLoginRoute('login');                                       //przekieruj, jeśli brak uprawnień

Utils::addRoute('shopShow'          , 'ShopCtrl');                              //strona główna sklepu
Utils::addRoute('productList'       , 'ShopCtrl');                              //lista produktów
Utils::addRoute('search'            , 'ShopCtrl');                              //wyszukaj i wyświetl produkty
Utils::addRoute('registerShow'      , 'RegisterCtrl');                          //widok rejestracji
Utils::addRoute('register'          , 'RegisterCtrl');                          //rejestracja
Utils::addRoute('loginShow'         , 'LoginCtrl');                             //widok logowania
Utils::addRoute('login'             , 'LoginCtrl');                             //logowanie
Utils::addRoute('logout'            , 'LoginCtrl');                             //wylogowanie
#Utils::addRoute('accountShow'       , 'AccountCtrl');                          //konto użytkownika
#Utils::addRoute('userDelete'        , 'AccountCtrl'       , ['admin']);        //usuwanie użytkownika
#Utils::addRoute('productNew'        , 'ProductEditCtrl' ,   ['admin']);        //dodawanie nowego produktu
#Utils::addRoute('productEdit'       , 'ProductEditCtrl' ,   ['admin']);        //edycja produktu
#Utils::addRoute('productSave'       , 'ProductEditCtrl' ,   ['admin']);        //zapisywanie produktu
#Utils::addRoute('productDelete'     , 'ProductEditCtrl' ,   ['admin']);        //usuwanie produktu
#Utils::addRoute('addToCart'         , 'ShopCtrl'        ,   ['admin','user']); //dodawanie do koszyka
#Utils::addRoute('deleteFromCart'    , 'ShopCtrl'        ,   ['admin','user']); //usuwanie z koszyka
#Utils::addRoute('cartShow'          , 'ShopCtrl'        ,   ['admin','user']); //pokaż koszyk
#Utils::addRoute('orderNew'          , 'ShopCtrl'        ,   ['admin','user']); //nowe zamówienie
?>