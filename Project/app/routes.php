<?php

// ex: http://example.com/about

/**
 * Routes register
 */

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');


/* debug($router->routes(), true); */
