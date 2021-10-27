<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('productos', 'Productos::index');
$routes->get('preguntas-frecuentes', 'Pregunta::index');
$routes->get('validacion-tiempo-real', 'PedidosRealTime::index');
$routes->get('pedidos-tiempo-real', 'PedidosRealTime::viewopen');


$routes->get('admin/dashboard', 'Administracion::index');
$routes->get('admin/productos/crear', 'Administracion::crear');
$routes->post('admin/productos/guardar', 'Administracion::guardar');
$routes->get('/admin/productos/editar/(:num)', 'Administracion::editar/$1');
$routes->post('/admin/productos/actualizar', 'Administracion::actualizar');
$routes->get('/admin/productos/eliminar/(:num)', 'Administracion::eliminar/$1');

$routes->post('/admin/negocio/actualizar', 'Administracion::actualizar_negocio');

$routes->get('admin/banners/crear', 'Administracion::crear_banner');
$routes->post('admin/banners/guardar', 'Administracion::guardar_banner');
$routes->post('admin/banners/actualizar', 'Administracion::actualizar_banner');

$routes->get('admin/pregunta/crear', 'Administracion::crear_pregunta');
$routes->post('admin/pregunta/guardar', 'Administracion::guardar_pregunta');
$routes->get('/admin/pregunta/editar/(:num)', 'Administracion::editar_pregunta/$1');
$routes->post('/admin/pregunta/actualizar', 'Administracion::actualizar_pregunta');
$routes->get('/admin/pregunta/eliminar/(:num)', 'Administracion::eliminar_pregunta/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
