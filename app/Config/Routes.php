<?php

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */

$routes->setAutoRoute(true); // Deshabilita la ruta automática para evitar conflictos

$routes->setDefaultController('Home');
$routes->setDefaultMethod('index'); // Define el método predeterminado como 'index'

$routes->get('/', 'Home::index');
$routes->get('/contactos', 'contactos::index');
$routes->get('/contactos/Agregar', 'contactos::Agregar');
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


// Otros ejemplos de rutas (comenta o elimina según tus necesidades)
// $routes->get('/otra_ruta', 'Controlador::metodo');

// ...

// Fin de tus rutas

?>