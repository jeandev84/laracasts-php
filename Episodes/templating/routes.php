<?php

// ex: http://example.com/about

/**
 * Routes register
 */
$router->define([
    '' => 'Controllers/collection.1.php',
    'about' => 'Controllers/about.php',
    'about/culture' => 'Controllers/about-culture.php',
    'contact' => 'Controllers/contact.php'
]);

/*
$router->define('', 'Controllers/collection.1.php');
$router->define('about', 'Controllers/about.php');
$router->define('about/culture', 'Controllers/about-culture.view.php');
$router->define('contact', 'Controllers/contact.php');
*/