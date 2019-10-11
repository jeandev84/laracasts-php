<?php
/**
 * Facotry File
 */
use Framework\Database\Connection;
use Framework\Database\QueryBuilder;

require './libs/functions.php';
require './src/Database/Connection.php';
require './src/Database/QueryBuilder.php';

/*
$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');
*/

return new QueryBuilder(
    Connection::make()
);