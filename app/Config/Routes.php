<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'Dashboard::index');


$routes->group('user', static function ($router) {
    $router->get('/', 'User::index');
    $router->get('tambah', 'User::tambah');
    $router->get('edit/(:num)', 'User::edit/$1');
    $router->get('delete/(:num)', 'User::delete/$1');

    $router->post('/', 'User::store');
    $router->post("(:num)", "User::update/$1");
});


$routes->group('akun', static function ($router) {
    $router->get('/', 'Akun::index');
    $router->get('tambah', 'Akun::tambah');
    $router->get('edit/(:num)', 'Akun::edit/$1');
    $router->get('delete/(:num)', 'Akun::delete/$1');

    $router->post('/', 'Akun::store');
    $router->post("(:num)", "Akun::update/$1");
});


$routes->group('tamu', static function ($router) {
    $router->get('/', 'Tamu::index');
    $router->get('tambah', 'Tamu::tambah');
    $router->get('edit/(:num)', 'Tamu::edit/$1');
    $router->get('delete/(:num)', 'Tamu::delete/$1');

    $router->post('/', 'Tamu::store');
    $router->post("(:num)", "Tamu::update/$1");
});


$routes->group('hargakamar', static function ($router) {
    $router->get('/', 'Hargakamar::index');
    $router->get('tambah', 'Hargakamar::tambah');
    $router->get('edit/(:num)', 'Hargakamar::edit/$1');
    $router->get('delete/(:num)', 'Hargakamar::delete/$1');

    $router->post('/', 'Hargakamar::store');
    $router->post("(:num)", "Hargakamar::update/$1");
});


$routes->group('transaksi', static function ($router) {
    $router->get('/', 'Transaksi::index');
    $router->get('tambah', 'Transaksi::tambah');
    $router->get('edit/(:num)', 'Transaksi::edit/$1');
    $router->get('delete/(:num)', 'Transaksi::delete/$1');

    $router->post('/', 'Transaksi::store');
    $router->post("(:num)", "Transaksi::update/$1");
});

$routes->group('pemasukan', static function ($router) {
    $router->get('/', 'Pemasukan::index');
    $router->get('filter', 'Pemasukan::filter');
    $router->get('tambah', 'Pemasukan::tambah');
    $router->get('edit/(:num)', 'Pemasukan::edit/$1');
    $router->get('delete/(:num)', 'Pemasukan::delete/$1');

    $router->post('/', 'Pemasukan::store');
    $router->post("(:num)", "Pemasukan::update/$1");
});


$routes->group('pengeluaran', static function ($router) {
    $router->get('/', 'Pengeluaran::index');
    $router->get('filter', 'Pengeluaran::filter');
    $router->get('tambah', 'Pengeluaran::tambah');
    $router->get('edit/(:num)', 'Pengeluaran::edit/$1');
    $router->get('delete/(:num)', 'Pengeluaran::delete/$1');

    $router->post('/', 'Pengeluaran::store');
    $router->post("(:num)", "Pengeluaran::update/$1");
});


$routes->group('laporan', static function ($router) {
    $router->get('jurnalumum', 'Laporan::jurnalumum');
    $router->get('neraca', 'Laporan::neraca');
    $router->get('perubahanmodal', 'Laporan::perubahanmodal');
    $router->get('labarugi', 'Laporan::labarugi');
});
