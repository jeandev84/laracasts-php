<?php


$query = require 'bootstrap.php';

// require './app/Entity/Task.php';

$tasks = $query->selectAll('todos');

/*
$query = require 'bootstrap.php';
require './app/Entity/Task.php';
$tasks = $query->selectAll('todos', App\Entity\Task::class);
==================================================================
$tasks = array_map(function ($task) {
    $t = new \App\Entity\Task();
    $t->description = $task['description'];
}, $tasks);
*/


debug($tasks);

// Load view
require 'index.view.php';