<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('unidades','Unidades::index');
$routes->get('unidades/nuevo','Unidades::nuevo');
$routes->post('unidades/insertar','Unidades::insertar');
$routes->get('unidades/eliminados','Unidades::eliminados');
$routes->get('unidades/editar/(:num)','Unidades::editar/$1');
$routes->get('unidades/eliminar/(:num)','Unidades::eliminar/$1');
$routes->get('unidades/reingresar/(:num)','Unidades::reingresar/$1');
//$routes->get('unidades/actualizar/(:num)','Unidades::actualizar/$1');
$routes->post('unidades/actualizar', 'Unidades::actualizar');
