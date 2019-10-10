<?php

$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'web developer'
];

$person['name'] = 'John';

/*
echo '<pre>';
die(var_dump($person));
echo '</pre>';
*/

unset($person['age']);


require 'index.view.php';



