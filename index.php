<?php

define('PROJECT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require 'functions.php';
require './src/Entity/Task.php';


// Get PDO
$pdo = connectToDb();


// fetch all tasks
$tasks = fetchAllTasks($pdo); # debug($tasks);


// Load view
require 'index.view.php';