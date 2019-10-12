<?php
/** Facotry File */

use Framework\App;
use Framework\Database\Connection;
use Framework\Database\QueryBuilder;

// Helpers
require '../libs/functions.php';

// Dependency Injection
/*
App::bind('config', $config = require '../config/app.php');

App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));
*/

App::bind('config', require '../config/app.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

/*

$app = [];

$app['config'] = require '../config/app.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);


debug($app);

Array
(
    [config] => Array
        (
            [database] => Array
                (
                    [name] => laracasts_php
                    [username] => root
                    [password] =>
                    [connection] => mysql:host=127.0.0.1
                    [options] => Array
                        (
                            [3] => 1
                        )

                )

        )

    [database] => Framework\Database\QueryBuilder Object
        (
            [pdo:Framework\Database\QueryBuilder:private] => PDO Object
                (
                )

        )

)
 */