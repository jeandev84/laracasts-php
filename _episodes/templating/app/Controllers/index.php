<?php


$tasks = $app['database']->selectAll('todos');

require '../resources/views/index.view.php';