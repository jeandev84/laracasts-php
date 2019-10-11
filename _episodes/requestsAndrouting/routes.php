<?php

// ex: http://example.com/about

/**
 * Routes register
 */

$router->get('', 'Controllers/index.php');
$router->get('about', 'Controllers/about.php');
$router->get('about/culture', 'Controllers/about-culture.php');
$router->get('contact', 'Controllers/contact.php');
$router->post('names', 'Controllers/add-name.php');


/* debug($router->routes(), true); */
