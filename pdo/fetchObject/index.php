<?php

require 'functions.php';


try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=laracasts_php', 'root', '');

} catch (PDOException $e) {

    /* die('Could not connect.'); */
    die($e->getMessage());
}


/*
$statement = $pdo->prepare('select * from `todos`');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
debug($results);
var_dump($tasks[0]->description);
*/

$statement = $pdo->prepare('select * from `todos`');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

# debug($tasks);

// Load view
require 'index.view.php';