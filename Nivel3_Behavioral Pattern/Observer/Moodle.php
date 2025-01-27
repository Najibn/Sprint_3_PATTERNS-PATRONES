<?php

// the class Subject --> (Moodle)
class Moodle {
    private $observers = [];

    //adding subscibers ($observer)
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    //unsubscribing ($observer)
    public function detach(Observer $observer): bool {
        foreach ($this->observers as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$key]);
                $this->observers = array_values($this->observers); 
                return true;
            }
        }
        return false;
    }

    public function notifyObservers(string $message) {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    //adding a submission
    public function newSubmission(string $taskName) {
        $message = "new SUBMISSION has been added: {$taskName}" . PHP_EOL;
        $this->notifyObservers($message);
    }
}

?>