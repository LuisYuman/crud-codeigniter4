<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/alumnos', 'AlumnoController::index');
$routes->get('/alumnos/create', 'AlumnoController::create');
$routes->post('/alumnos/store', 'AlumnoController::store');
$routes->get('/alumnos/edit/(:num)', 'AlumnoController::edit/$1');
$routes->post('/alumnos/update/(:num)', 'AlumnoController::update/$1');
$routes->get('/alumnos/delete/(:num)', 'AlumnoController::delete/$1');

/**
 * Rutas para curso
 */
$routes->get('/cursos', 'CursoController::index');