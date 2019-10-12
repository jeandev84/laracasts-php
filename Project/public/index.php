<?php

use Framework\Http\Request;
use Framework\Routing\Router;

require '../vendor/autoload.php';
require '../src/bootstrap.php';

Router::load('../app/routes.php')
                ->direct(
                    Request::uri(),
                    Request::method()
                );




