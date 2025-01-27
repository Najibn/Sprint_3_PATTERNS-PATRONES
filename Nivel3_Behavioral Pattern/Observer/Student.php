<?php
// Student class implementing Observer
class Student implements Observer{
    private string $name;
    private string $course;

    public function __construct(string $name,string $course)
    {
        $this->name   = $name;
        $this->course = $course;
    }

    public function update(string $message) {
        echo "Update for student >> {$this->name}: From: {$this->course}  -->  {$message}" .PHP_EOL;
    }
}


    








?>