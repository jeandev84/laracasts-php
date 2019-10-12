<?php

use Framework\Http\Request;
use Framework\Routing\Router;

$database = require '../src/bootstrap.php';

require Router::load('../routes.php')
                ->direct(
                    Request::uri(),
                    Request::method()
                );




