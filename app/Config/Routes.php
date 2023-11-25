<?php

/*
 * --------------------------------------------------------------------
 ** Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('testprueba1', 'Home::testprueba1');
$routes->get('/productos', 'Productos::index');
$routes->get('/restserver/test_get', 'Restserver::test_get');
$routes->group('restserver', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('test_get', 'Restserver::test_get');
    $routes->get('login', 'Restserver::login');
});
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

