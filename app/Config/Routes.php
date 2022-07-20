<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/auth', 'Auth::index');
$routes->get('/auth', 'Auth::forgout');


$routes->get('/kritik','Kritik::index');
$routes->get('/kritik/create','Kritik::create');
$routes->post('/kritik/add','Kritik::tambah');
$routes->post('/kritik/edit(:any)','kritik::edit/$1');
$routes->post('/kritik/delete(:any)','kritik::delete/$1');

$routes->get('/admin','admin::index');

$routes->get('/admin/kegiatan','admin::kegiatan');
$routes->get('/admin/createk','admin::createk');
$routes->post('/admin/editk(:any)','admin::editk/$1');
$routes->post('/admin/add','admin::tambahk');

$routes->get('/produktifitas','produktifitas::index');
$routes->get('/produktifitas/create','produktifitas::create');
$routes->post('/produktifitas/tambah','produktifitas::tambah');
$routes->post('/produktifitas/edit(:any)','produktifitas::edit/$1');
$routes->post('/produktifitas/delete(:any)','produktifitas::delete/$1');

$routes->get('/kegiatan','kegiatan::index');
$routes->get('/kegiatan/create','kegiatan::createt');
$routes->post('/kegiatan/tambah','kegiatan::tambah');
$routes->get('/kegiatan/harian','kegiatan::harian');
$routes->get('/kegiatan/create','kegiatan::createh');
$routes->post('/kegiatan/tambahh','kegiatan::tambahh');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
