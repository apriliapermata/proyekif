<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Pages::index');
 $routes->get('/menupelanggan', 'Pages::menupelanggan');
 $routes->get('/home', 'Pages::index');
 $routes->get('/about', 'Pages::about');
 $routes->get('/contact', 'Pages::contact');
 

$routes->get('login', 'Login::index'); # Menampilkan Halaman Login
$routes->post('login', 'Login::action'); # Untuk handle form login
$routes->get('logout', 'Login::logout');
$routes->get('homekaryawan', 'HomeKaryawan::index');
$routes->get('menu', 'PagesKaryawan::menu');
$routes->get('datapelanggan','PagesKaryawan::pelanggan');
$routes->get('laporan', 'PagesKaryawan::laporan');