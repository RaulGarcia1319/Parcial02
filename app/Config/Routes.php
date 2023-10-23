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

$routes->get('popularidad/', 'Popularidad::getIndex');

$routes->post('genero/new', 'Genero::guardar');
$routes->post('peliculas/new', 'Peliculas::guardar');

$routes->get('/eliminar/(:num)', 'Peliculas::eliminar/$1');
$routes->get('/editar/(:num)', 'Peliculas::editar/$1');

$routes->post('/actualizar', 'Peliculas::actualizar');

$routes->get('/delete/(:num)', 'Genero::eliminar/$1');

