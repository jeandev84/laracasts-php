<?php
/** Facotry File */

use Framework\Database\Connection;
use Framework\Database\QueryBuilder;


$config = require __DIR__.'/config/app.php';

require './libs/functions.php';
require './src/Database/Connection.php';
require './src/Database/QueryBuilder.php';


return new QueryBuilder(
    Connection::make($config['database'])
);
