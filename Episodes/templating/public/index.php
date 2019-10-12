<?php

use Framework\Http\Request;
use Framework\Routing\Router;

$database = require '../src/bootstrap.php';


/* debug($app, true); */
require Router::load('../routes.php')->direct(Request::uri());
