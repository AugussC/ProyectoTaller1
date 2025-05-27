<?php

use CodeIgniter\Router\RouteCollection;

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
/**
 * @var RouteCollection $routes
 */
// Rutas públicas (sin filtro)
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('terminos', 'Home::terminos');
$routes->get('contactos', 'Home::contactos');
$routes->get('lavado_recomendado', 'Home::lavado_recomendado');
$routes->get('guia_talles', 'Home::guia_talles');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('preguntas_frecuentes', 'Home::preguntas_frecuentes');

// Rutas solo para administrador
$routes->get('admin', 'Admin::index', ['filter' => 'auth:admin']);
$routes->get('productos', 'Admin::productos', ['filter' => 'auth:admin']);

// Rutas de autenticación y registro
$routes->get('login', 'Login::index');
$routes->post('auth', 'Login::auth');
$routes->get('logout', 'Login::logout');
$routes->get('register', 'Usuarios::index');
$routes->post('register', 'Usuarios::create');
$routes->post('consulta', 'Contacto::consulta');



