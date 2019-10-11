<?php


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


// Array of tasks
$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];



// Load view
require 'index.view.php';



