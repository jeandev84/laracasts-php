<?php


require 'functions.php';


# Controller and Logic

// Entity Task
class Task
{

     /**
      * @var string
     */
     protected $description;

     /**
      * @var bool
     */
     protected $completed = false; // true


     /**
      * Task constructor. [ Automatically triggered on instantiation ]
      * @param $description
     */
     public function __construct($description)
     {
         $this->description = $description;
     }

     /**
      * Determine if task completed or not
      * @return bool
      */
     public function isComplete()
     {
          return $this->completed;
     }

     /**
      *
     */
     public function complete()
     {
         $this->completed = true;
     }

     /**
      * @return string
     */
     public function getDescription(): string
     {
        return $this->description;
     }

     /**
      * @param string $description
     */
     public function setDescription(string $description)
     {
        $this->description = $description;
     }

}


// Array of tasks [ Collection of Tasks ]
$tasks = [
    new Task('Go to the store'), // 0
    new Task('Finish my screencast'), // 1
    new Task('Clean my room') // 2
];


// dd($tasks);

// Set completed for first task ( tasks[0] )
$tasks[0]->complete();


// Load view
require 'index.view.php';



