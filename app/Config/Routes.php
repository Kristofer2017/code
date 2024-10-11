<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// Rutas usuario
$routes->get('/usuario', 'UsuarioController::index');
$routes->post('/usuario/store', 'UsuarioController::store');
$routes->get('/usuario/success', 'UsuarioController::success');
$routes->get('/usuario/lista', 'UsuarioController::list');

// Rutas curriculum
$routes->get('/curriculum', 'CurriculumController::create');
$routes->post('/curriculum/store', 'CurriculumController::store');
$routes->get('/curriculum/success', 'CurriculumController::success');
$routes->get('/curriculum/lista', 'CurriculumController::index');
$routes->get('/curriculum/detalle/(:num)', 'CurriculumController::show/$1');
