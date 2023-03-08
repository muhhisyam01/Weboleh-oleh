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
// $routes->get('/Auth/(:any)', 'Auth::tes');
// $routes->get('/tes', 'Auth::tes');


$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/About', 'Home::About');
$routes->get('/Services', 'Home::Services');
$routes->get('/detail_services_user(:segment)', 'Home::detail_services_user/$1');
$routes->get('/Kegiatan_Home', 'Home::Kegiatan_Home');
$routes->get('/KegiatanDetail(:segment)', 'Home::KegiatanDetail/$1');
$routes->get('/Shop', 'Home::Shop');
$routes->get('/ShopDetail(:segment)', 'Home::ShopDetail/$1');
$routes->get('/Contact', 'Home::Contact');



// admin
$routes->get('/awal', 'Admin::awal');
$routes->get('/produk', 'Admin::produk');
$routes->get('/tambah_produk', 'Admin::tambah_produk');
$routes->post('/produk_proses', 'Admin::produk_proses');
$routes->get('/detail_produk/(:segment)', 'Admin::detail_produk/$1');
$routes->get('/delete/(:segment)', 'Admin::delete/$1');
$routes->post('/ubah/(:segment)', 'Admin::ubah/$1');

// untuk profil
$routes->get('/profil', 'Profil::profil');
$routes->get('/add_profil', 'Profil::add_profil');
$routes->post('/proses_profil', 'Profil::proses_profil');
$routes->get('/edit_profil/(:segment)', 'Profil::edit_profil/$1');
// proses ubah profil
$routes->post('/proses_ubah/(:any)', 'Profil::proses_ubah/$1');
$routes->get('/delete_profil/(:segment)', 'Profil::delete_profil/$1');

// untuk kegiatan
$routes->get('/kegiatan', 'Kegiatan::kegiatan');
$routes->get('/add_kegiatan', 'Kegiatan::add_kegiatan');
$routes->post('/proses_kegiatan', 'Kegiatan::proses_kegiatan');
$routes->get('/detail_kegiatan/(:segment)', 'Kegiatan::detail_kegiatan/$1');
$routes->get('/delete_kegiatan/(:segment)', 'Kegiatan::delete_kegiatan/$1');

// services
$routes->get('/Services_admin', 'Services_admin::Services_admin');
$routes->get('/add_Services', 'Services_admin::add_Services');
$routes->post('/proses_Services', 'Services_admin::proses_Services');
$routes->get('/detail_services/(:segment)', 'Services_admin::detail_services/$1');
$routes->get('/delete_services/(:segment)', 'Services_admin::delete_services/$1');





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