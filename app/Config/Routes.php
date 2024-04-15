<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'C_Mahasiswa::display');
$routes->get('view/(:num)', 'C_Mahasiswa::view/$1');
$routes->get('delete/(:num)', 'C_Mahasiswa::delete/$1');
$routes->post('create', 'C_Mahasiswa::create');
$routes->post('search', 'C_Mahasiswa::search');
$routes->get('update/(:num)', 'C_Mahasiswa::updateView/$1');
$routes->post('update/(:num)', 'C_Mahasiswa::update/$1');