<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->set404Override();
$routes->get('/', 'Home::index');
$routes->presenter('pelicula');
$routes->presenter('categoria');
