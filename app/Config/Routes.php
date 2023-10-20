<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('peliculas/', 'Peliculas::getIndex');
$routes->get('peliculas/new', 'Peliculas::getNuevo');

$routes->get('genero/', 'Genero::getIndex');
$routes->get('genero/new', 'Genero::getNuevo');

$routes->post('genero/new', 'Genero::guardar');