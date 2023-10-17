<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('peliculas/', 'Peliculas::getIndex');
$routes->get('peliculas/', 'Peliculas::getIndex');
