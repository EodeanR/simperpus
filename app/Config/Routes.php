<?php

namespace Config;

use App\Controllers\ViewController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
// $routes->get('/', 'Home::index');
$routes->get('/', function () {
    return view('welcome');
});
// $routes->group('login', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/dashboard/logout', 'LoginController::logout');
// });
$routes->get('/signup', 'SignUpController::index');
$routes->post('/signup', 'SignUpController::signup');
$routes->get('/success', 'SignUpController::success');

$routes->group('', ['filter' => 'authenticate'], function ($routes) {
    $routes->get('/dashboard', 'ViewController::v_dashboard');
    $routes->get('/admin',  'ViewController::v_admin');
    $routes->get('/buku', 'ViewController::v_buku');
    $routes->resource('anggota');
    $routes->get('/kategori', 'ViewController::v_kategori');
    $routes->get('/peminjaman', 'ViewController::v_peminjaman');
    $routes->get('/pengembalian', 'ViewController::v_pengembalian');
});
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
