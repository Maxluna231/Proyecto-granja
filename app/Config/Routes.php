<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/temperaturas/gettemperaturas','TemperaturaController::getTemperaturas');
$routes->get('/temperaturas/respuesta','TemperaturaController::respuesta');

$routes->group('temperaturas/', ['filter' => 'cors'], function ($routes) {
    // ...
});

$routes->post('/temperaturas/posttemperatura','TemperaturaController::postTemperatura');