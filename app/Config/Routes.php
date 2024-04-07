<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');


$routes->group('', ['filter'=>'authFrontFilter','namespace' => 'App\Controllers'], static function ($routes) {
    $routes->match(['get','post'],'/', 'WebsiteController::home');
    $routes->match(['get', 'post'],'contact', 'WebsiteController::contact');
    $routes->match(['get','post'],'register-user', 'WebsiteController::registerUser');
    $routes->match(['get', 'post'],'check-email', 'WebsiteController::checkEmail');
    $routes->match(['get', 'post'],'check-mobile', 'WebsiteController::checkMobile');
    $routes->match(['get', 'post'],'about', 'WebsiteController::about');
    $routes->match(['get', 'post'],'budget-planning', 'WebsiteController::budgetPlanning');
    $routes->match(['get', 'post'],'login', 'WebsiteController::login');
    $routes->match(['get', 'post'],'report', 'WebsiteController::report');
    $routes->match(['get', 'post'],'logout', 'WebsiteController::logout');
    $routes->match(['get', 'post'], 'reset-pass', 'WebsiteController::reset_pass');
    $routes->match(['get', 'post'], 'forgot-password-check', 'WebsiteController::forgotPasswordCheck');
    $routes->match(['get', 'post'], 'forgot-password/(:any)', 'WebsiteController::forgotPassword/$1');
    $routes->match(['get', 'post'], 'add-new-password', 'WebsiteController::add_new_password');
    $routes->match(['get', 'post'], 'profile', 'WebsiteController::profile');
    $routes->match(['get', 'post'],'career', 'WebsiteController::career');
    $routes->match(['get', 'post'],'get-all-job', 'WebsiteController::getAllJob');
    $routes->match(['get', 'post'],'career-form/(:any)', 'WebsiteController::career_form/$1');
    $routes->match(['get','post'],'apply-job', 'WebsiteController::apply_job');
});
$routes->get('get-file/(:any)', 'FileController::getFile/$1');




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


        $routes->match(['get', 'post'],'global-setting/', 'BackPanelController::globalSettings');
        $routes->match(['get', 'post'],'global-setting/(:segment)', 'BackPanelController::globalSettings/$1');
        $routes->match(['get', 'post'],'global-setting/(:segment)/(:segment)', 'BackPanelController::globalSettings/$1/$2');


        $routes->match(['get', 'post'],'news-category/', 'BackPanelController::newsCategory');
        $routes->match(['get', 'post'],'news-category/(:segment)', 'BackPanelController::newsCategory/$1');
        $routes->match(['get', 'post'],'news-category/(:segment)/(:segment)', 'BackPanelController::newsCategory/$1/$2');


        $routes->match(['get', 'post'],'job-category/', 'BackPanelController::jobCategory');
        $routes->match(['get', 'post'],'job-category/(:segment)', 'BackPanelController::jobCategory/$1');
        $routes->match(['get', 'post'],'job-category/(:segment)/(:segment)', 'BackPanelController::jobCategory/$1/$2');


        $routes->match(['get', 'post'],'news/', 'BackPanelController::news');
        $routes->match(['get', 'post'],'news/(:segment)', 'BackPanelController::news/$1');
        $routes->match(['get', 'post'],'news/(:segment)/(:segment)', 'BackPanelController::news/$1/$2');


        $routes->match(['get', 'post'],'state/', 'BackPanelController::state');
        $routes->match(['get', 'post'],'state/(:segment)', 'BackPanelController::state/$1');
        $routes->match(['get', 'post'],'state/(:segment)/(:segment)', 'BackPanelController::state/$1/$2');


        $routes->match(['get', 'post'],'add-news', 'BackPanelController::addNews');
        $routes->match(['get', 'post'],'edit-news/(:num)', 'BackPanelController::editNews/$1');


        $routes->match(['get', 'post'],'contact/', 'BackPanelController::contact');
        $routes->match(['get', 'post'],'contact/(:segment)', 'BackPanelController::contact/$1');
        $routes->match(['get', 'post'],'contact/(:segment)/(:segment)', 'BackPanelController::contact/$1/$2');

        $routes->match(['get', 'post'],'our-services/', 'BackPanelController::services');
        $routes->match(['get', 'post'],'our-services/(:segment)', 'BackPanelController::services/$1');
        $routes->match(['get', 'post'],'our-services/(:segment)/(:segment)', 'BackPanelController::services/$1/$2');
       

        
        $routes->match(['get', 'post'],'partner/', 'BackPanelController::partner');
        $routes->match(['get', 'post'],'partner/(:segment)', 'BackPanelController::partner/$1');
        $routes->match(['get', 'post'],'partner/(:segment)/(:segment)', 'BackPanelController::partner/$1/$2');


        $routes->match(['get', 'post'],'register/', 'BackPanelController::register');
        $routes->match(['get', 'post'],'register/(:segment)', 'BackPanelController::register/$1');
        $routes->match(['get', 'post'],'register/(:segment)/(:segment)', 'BackPanelController::register/$1/$2');

        $routes->match(['get', 'post'],'client-budget/(:num)', 'BackPanelController::clientBudget/$1');

        $routes->match(['get', 'post'],'job/', 'BackPanelController::Job');
        $routes->match(['get', 'post'],'job/(:segment)', 'BackPanelController::Job/$1');
        $routes->match(['get', 'post'],'job/(:segment)/(:segment)', 'BackPanelController::Job/$1/$2');


        $routes->match(['get', 'post'],'job-candidate/', 'BackPanelController::JobCandidate');
        $routes->match(['get', 'post'],'job-candidate/(:segment)', 'BackPanelController::JobCandidate/$1');
        $routes->match(['get', 'post'],'job-candidate/(:segment)/(:segment)', 'BackPanelController::JobCandidate/$1/$2');


        $routes->match(['get', 'post'],'database-backup', 'BackPanelController::databaseBackup');
       
    });
});
/* $routes->group('back-panel', static function ($routes) {

    
    $routes->group('/', ['namespace' => 'App\Controllers'], static function ($routes) {
        $routes->get('dashboard', 'DashboardController::index');
       
    });
}); */
