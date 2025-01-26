<?php
require_once 'Poultry.php';

class TurkeyAdapter extends Duck
{
    private Turkey $turkey;

    //contructor injection(object turkey)
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    //calling  gobble ->quck()
    public function quack()
    {
        $this->turkey->gobble();
        // echo  "Gobble gobble ".PHP_EOL;
    }

    //calling fly() of turkey 5x's equivalent to ducks length
    public function fly()
    {
        for ($i = 1; $i <= 5; $i++) {
            $this->turkey->fly();
            //echo  "I'm flying a short distance" . PHP_EOL;
        }
    }
}


?>