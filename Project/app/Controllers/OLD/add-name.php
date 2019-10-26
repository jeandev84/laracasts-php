<?php

use Framework\App;

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

header('Location : /');
exit;