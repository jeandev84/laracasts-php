<?php
/** Facotry File */

use Framework\Database\Connection;
use Framework\Database\QueryBuilder;


$app = [];

$app['config'] = require '../config/app.php';

require '../libs/functions.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);


/*

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

    [database] => Project\Database\QueryBuilder Object
        (
            [pdo:Project\Database\QueryBuilder:private] => PDO Object
                (
                )

        )

)
 */