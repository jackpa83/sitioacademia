<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('directiva', 'Directiva::index');

$routes->get('ia', 'Ia::index');

$routes->get('login', 'Auth::login');
$routes->post('logear', 'Auth::loginAuth');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index'); 

//Rutas Login
$routes->get('/login', 'Auth::login');
$routes->post('/loginAuth', 'Auth::loginAuth');
$routes->get('/logout', 'Auth::logout');

//Rutas Logo
$routes->get('logo', 'Logo::index');
$routes->post('logo_upload', 'Logo::process');  
//Rutas Banner
$routes->get('banner', 'BannerController::index');
$routes->post('banner_upload', 'BannerController::process'); 
//Rutas Banner Quienes Somos
$routes->get('logo_q', 'BannerQnsController::index');
$routes->post('Qns_upload', 'BannerQnsController::process'); 
//Rutas Junta Directiva
$routes->get('jdirectiva', 'JDirectivaController::index');
$routes->post('jd_upload', 'JDirectivaController::process'); 
//Rutas Usuarios
$routes->get('/user', 'RegisterController::index');
$routes->post('r_user', 'RegisterController::store'); 