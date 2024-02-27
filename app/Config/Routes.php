<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'WebsiteController::home');


$routes->group('back-panel', static function ($routes) {

    $routes->match(['get','post'], '/', 'AuthController::Auth');    
    $routes->group('/', ['filter'=>'authFilter','namespace' => 'App\Controllers'], static function ($routes) {
        $routes->get('dashboard', 'DashboardController::index');
        $routes->get('logout', 'AuthController::logout');
        $routes->match(['get','post'], 'update-profile', 'AuthController::updateProfile');
        $routes->match(['get','post'], 'change-password', 'AuthController::changePassword');
        // $routes->match(['get','post'], 'change-password', 'BackPanelController::Slider');

        $routes->match(['get', 'post'],'slider/', 'BackPanelController::Slider');
        $routes->match(['get', 'post'],'slider/(:segment)', 'BackPanelController::Slider/$1');
        $routes->match(['get', 'post'],'slider/(:segment)/(:segment)', 'BackPanelController::Slider/$1/$2');


        $routes->match(['get', 'post'],'documents/', 'BackPanelController::Documents');
        $routes->match(['get', 'post'],'documents/(:segment)', 'BackPanelController::Documents/$1');
        $routes->match(['get', 'post'],'documents/(:segment)/(:segment)', 'BackPanelController::Documents/$1/$2');


        $routes->match(['get', 'post'],'about-hospital/', 'BackPanelController::aboutHospital');
        $routes->match(['get', 'post'],'about-hospital/(:segment)', 'BackPanelController::aboutHospital/$1');
        $routes->match(['get', 'post'],'about-hospital/(:segment)/(:segment)', 'BackPanelController::aboutHospital/$1/$2');



        $routes->match(['get', 'post'],'gallery/', 'BackPanelController::Gallery');
        $routes->match(['get', 'post'],'gallery/(:segment)', 'BackPanelController::Gallery/$1');
        $routes->match(['get', 'post'],'gallery/(:segment)/(:segment)', 'BackPanelController::Gallery/$1/$2');

        
        $routes->match(['get', 'post'],'cryptocurrency-trading/', 'BackPanelController::cryptocurrencyTrading');
        $routes->match(['get', 'post'],'cryptocurrency-trading/(:segment)', 'BackPanelController::cryptocurrencyTrading/$1');
        $routes->match(['get', 'post'],'cryptocurrency-trading/(:segment)/(:segment)', 'BackPanelController::cryptocurrencyTrading/$1/$2');


        $routes->match(['get', 'post'],'core-need/', 'BackPanelController::coreNeed');
        $routes->match(['get', 'post'],'core-need/(:segment)', 'BackPanelController::coreNeed/$1');
        $routes->match(['get', 'post'],'core-need/(:segment)/(:segment)', 'BackPanelController::coreNeed/$1/$2');


        $routes->match(['get', 'post'],'global-setting/', 'GlobalSetting::mannageGlobalSetting');
        $routes->match(['get', 'post'],'global-setting/(:segment)', 'GlobalSetting::mannageGlobalSetting/$1');
        $routes->match(['get', 'post'],'global-setting/(:segment)/(:segment)', 'GlobalSetting::mannageGlobalSetting/$1/$2');


        $routes->match(['get', 'post'],'news-category/', 'BackPanelController::newsCategory');
        $routes->match(['get', 'post'],'news-category/(:segment)', 'BackPanelController::newsCategory/$1');
        $routes->match(['get', 'post'],'news-category/(:segment)/(:segment)', 'BackPanelController::newsCategory/$1/$2');


        $routes->match(['get', 'post'],'news/', 'BackPanelController::news');
        $routes->match(['get', 'post'],'news/(:segment)', 'BackPanelController::news/$1');
        $routes->match(['get', 'post'],'news/(:segment)/(:segment)', 'BackPanelController::news/$1/$2');


        $routes->match(['get', 'post'],'state/', 'BackPanelController::state');
        $routes->match(['get', 'post'],'state/(:segment)', 'BackPanelController::state/$1');
        $routes->match(['get', 'post'],'state/(:segment)/(:segment)', 'BackPanelController::state/$1/$2');
       
    });
});
/* $routes->group('back-panel', static function ($routes) {

    
    $routes->group('/', ['namespace' => 'App\Controllers'], static function ($routes) {
        $routes->get('dashboard', 'DashboardController::index');
       
    });
}); */
