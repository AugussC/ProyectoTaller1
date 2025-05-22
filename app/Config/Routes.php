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

$routes->get('admin', 'Admin::index');
$routes->get('productos', 'Admin::productos');