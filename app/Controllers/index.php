<?php


/* $tasks = $app['database']->selectAll('todos'); */

$users = $app['database']->selectAll('users');

require '../resources/views/index.view.php';