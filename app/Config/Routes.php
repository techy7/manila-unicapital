<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/sysinfo', 'SystemInfo::index');

$routes->get('/', 'Login::checkAuth');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::loginAuth');
$routes->get('/logout', 'Login::logoutAuth');

$routes->group('', ['filter' => 'authGuard'], static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');

    // Users
    $routes->get('users', 'Users::index');
    $routes->get('users/(:num)', 'Users::viewUser/$1');
    $routes->group('users', static function ($routes) {
        $routes->get('add', 'Users::addUser');
        $routes->get('edit/(:num)', 'Users::editUser/$1');
        $routes->post('save', 'Users::updateUser');
        
        $routes->get('groups', 'Users::index');
        $routes->get('group_permissions', 'Users::index');
    });

    // Profile
    $routes->get('profile', 'Profile::index');
    $routes->group('profile', static function ($routes) {
        $routes->get('edit', 'Profile::edit');
        $routes->post('save', 'Profile::update');
        $routes->get('activity', 'Profile::activity');
    });

    // Deadlink Redirects
    $routes->addRedirect('users/edit', 'users');
});



#$routes->get('/signup', 'LoginController::index');
#$routes->match(['get', 'post'], 'LoginController/store', 'LoginController::store');
#$routes->match(['get', 'post'], 'LoginController/loginAuth', 'LoginController::loginAuth');

#$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
