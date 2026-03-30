<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('directiva', 'Directiva::index');

$routes->get('ia', 'Ia::index');



$routes->get('login', 'Auth::login');
$routes->post('logear', 'Auth::logear');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index'); 
//Rutas Logo
$routes->get('logo', 'Logo::index');
$routes->post('logo_upload', 'Logo::process');  
//Rutas Banner
$routes->get('banner', 'BannerController::index');
$routes->post('banner_upload', 'BannerController::process'); 