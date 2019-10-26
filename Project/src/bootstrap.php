<?php
/** Facotry File */

use Framework\App;
use Framework\Database\Connection;
use Framework\Database\QueryBuilder;

// Helpers
require '../libs/functions.php';

// Dependency Injection
App::bind('config', require '../config/app.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


// Load view
function view($name, $data = [])
{
    extract($data);
    require "../resources/views/{$name}.view.php";
}


function redirect($path)
{
    header("Location : /{$path}");
    exit;
}