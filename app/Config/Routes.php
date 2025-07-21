<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rute untuk menampilkan semua mahasiswa (halaman utama)
$routes->get('/mahasiswa', 'Mahasiswa::index');

// Rute untuk menampilkan form tambah data
$routes->get('/mahasiswa/create', 'Mahasiswa::create');

// Rute untuk memproses penyimpanan data baru
$routes->post('/mahasiswa/store', 'Mahasiswa::store');

// Rute untuk menampilkan form edit data
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');

// Rute untuk memproses update data
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');

// Rute untuk memproses hapus data
$routes->post('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');