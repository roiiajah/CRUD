<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/mahasiswa/create', 'Mahasiswa::create');

$routes->resource('mahasiswa', ['controller' => 'Mahasiswa']);
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
