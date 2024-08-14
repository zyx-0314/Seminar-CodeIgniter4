<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// Route for showing the index/home page
//$routes->get([URL string],[controller_name::function_name])
$routes->get('/','Users::index');
$routes->get('users','Users::index');
$routes->get('users/index','Users::index');
$routes->get('users/test','Users::test');
// (:any), (:segment), (:num), (:alpha), (:alphanum), (:hash)
$routes->get('users/test/(:any)','Users::test/$1');
// $routes->get('users/test/(:any)/(:any)','Users::test/$1/$2');

$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/view/(:num)', 'Users::view/$1');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');