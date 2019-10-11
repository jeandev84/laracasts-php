<?php

/*
 - title,
 - due,
 - assigned_to ,
 - completed (boolean: true or false / yes or no)
   echo (completed == 'yes' ? 'is completed' : 'no completed');
   if($completed) {} or if(! $completed) {}

*/

$task = [
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Jeffrey',
    'completed' => true,
];


require 'index.view.php';



