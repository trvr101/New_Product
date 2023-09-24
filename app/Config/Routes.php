<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/prod/(:any)', 'MainController::prod/$1');
$routes->get('/item/(:any)', 'MainController::item/$1');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
$routes->get('/edit/(:any)', 'MainController::edit/$1');
$routes->get('/add', 'MainController::add');
$routes->post('/save', 'MainController::save');
$routes->post('/update_save', 'MainController::update_save');
