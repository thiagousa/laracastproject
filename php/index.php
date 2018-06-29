<?php
require 'function.php';

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {

        $this->description = $description;
    }

    public function isComplete(){
        return $this->completed;
    }

    public function complete(){
       $this->completed = true;
    }
    

}



$tasks = [ 

new Task('Go to Store'),
new Task('Finish my screencast'),
new Task('Clean my room')

];

$tasks[0]->complete();

require 'index.view.php';
