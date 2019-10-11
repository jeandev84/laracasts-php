<?php


/**
 * Class Task
 */
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
     * Complete the task
     */
    public function complete()
    {
        $this->completed = true;
    }
}

// A new task object
$task = new Task('Go to the store.');


// Complete the task
$task->complete();

var_dump($task->isComplete());




