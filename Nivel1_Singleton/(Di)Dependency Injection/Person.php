<?php

class Person
{
    private Wallet $wallet;
    private HouseKeys $houseKeys;
    private CarKeys $carKeys;
    private Smartphone $smartphone;

    //implimenting type hinting->DI through the constructor injection. 
    public function __construct(Wallet $wallet, HouseKeys $houseKeys, CarKeys $carKeys, Smartphone $smartphone)
    {
        $this->wallet              = $wallet;
        $this->houseKeys           = $houseKeys;
        $this->carKeys             = $carKeys;
        $this->smartphone          = $smartphone;
    }

    public function leavingHomeForWork(): string
    {
        $routine = [
            $this->wallet->items(),
            $this->houseKeys->items(),
            $this->carKeys->items(),
            $this->smartphone->items(),
        ];
        return "Routine checking...... "  .PHP_EOL.  implode("", $routine) . "¡YAY! Now i can leave for cibernarium!";
    }
}


?>