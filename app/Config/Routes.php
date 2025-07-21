<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/mahasiswa/create', 'Mahasiswa::create');

$routes->resource('mahasiswa', ['controller' => 'Mahasiswa']);
$routes->post('/mahasiswa/store', 'Mahasiswa::store');

$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->post('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');