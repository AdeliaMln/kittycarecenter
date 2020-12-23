<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'KittyCareCenter::index');
$routes->get('/meows-up', 'KittyCareCenter::meowsup');
$routes->get('/interme-ow', 'KittyCareCenter::intermeow');
$routes->get('/donasi', 'KittyCareCenter::donasi');
$routes->get('/petcare', 'KittyCareCenter::petcare');
$routes->get('/hubungikami', 'KittyCareCenter::hubungikami');
$routes->get('/daftar', 'KittyCareCenter::daftar');
$routes->get('/masuk', 'KittyCareCenter::masuk');
$routes->get('/donasi/pembayaran', 'KittyCareCenter::pembayaran');
$routes->get('/interme-ow/artikel1', 'KittyCareCenter::artikel1');
$routes->get('/interme-ow/artikel2', 'KittyCareCenter::artikel2');
$routes->get('/interme-ow/artikel3', 'KittyCareCenter::artikel3');
$routes->get('/interme-ow/artikel4', 'KittyCareCenter::artikel4');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
