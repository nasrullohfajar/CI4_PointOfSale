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
$routes->get('/beranda', 'C_beranda::index');

//kategori
$routes->get('/kategori', 'C_kategori::index');
$routes->post('/carikategori', 'C_kategori::index');
$routes->post('/hapuskategori', 'C_kategori::hapus');
$routes->post('/editkategori', 'C_kategori::formEdit');

$routes->get('/satuan', 'C_satuan::index');
$routes->get('/produk', 'C_produk::index');
$routes->get('/tambahproduk', 'C_produk::tambahdata');

//penjualan
$routes->get('/penjualan', 'C_penjualan::index');
$routes->post('/buatfaktur', 'C_penjualan::buatFaktur');

//pembelian
$routes->get('/pembelian', 'C_pembelian::index');
$routes->post('/postpembelian', 'C_pembelian::simpanDataPembelian');


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