<?php

// the Concrete class -->Mentor  (implementing Observer)
class Mentor implements Observer {
    private string $name;
    private string $department;

    public function __construct(string $name,string $department) {
        $this->name       = $name;
        $this->department = $department;
    }

    public function update(string $message) {
        echo "Notice! for mentor {$this->name}: from:  {$this->department} {$message}\n";
    }
}

?>