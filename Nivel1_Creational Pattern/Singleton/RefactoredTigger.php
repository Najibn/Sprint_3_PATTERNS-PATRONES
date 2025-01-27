<?php

declare(strict_types=1);

class RefactoredTigger{
    private static $tigger;
    private int $count = 0;

    protected function __construct()          //prevent creating new instances outside of class(private)
    {
        echo  "Building character..." . PHP_EOL;
    }

    public static function getInstance(): RefactoredTigger {
        if (!isset(self::$tigger)) {                          //or if (self::$instance === null) {
           self::$tigger = new RefactoredTigger();             //self::$tigger = new self(); 
        }

        return self::$tigger;
    }

    public function Roar(): string {
        $this->count++;
        return "Grrr!" . PHP_EOL;
    }

    public function getCount(): int {
        return $this->count;
    }

    public function __clone(){}                    //prevent cloning/copying outside class -> clone operator.
    public function __wakeup(){                   //prevent unserializing of an instance   ->global function unserialized()
        //throw new Exception("this singleton cannot be unserialized!");
    }
}





?>

