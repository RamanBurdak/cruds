<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Home/create', 'Home::create');
$routes->post('Home/stored', 'Home::stored');
$routes->get('Home/edita/(:num)', 'Home::edita/$1');
$routes->get('Home/datadelete/(:num)', 'Home::datadelete/$1');
$routes->post('Home/dataupdate', 'Home::dataupdate');
 