<?php

class AutomaticDishWasherFacade{
    private SoapApplication   $laundrySoap;
    private RinserApplication $rinser;
    private DryerApplication  $dryer;

    public function __construct(SoapApplication $laundrySoap,RinserApplication $rinser,DryerApplication $dryer)
    {
        $this->laundrySoap = $laundrySoap ;
        $this->rinser      = $rinser ;
        $this->dryer       = $dryer ;
    }


    public function StartOnButton() {
       $button = [
        $this->laundrySoap->application(),
        $this->laundrySoap->AddWater(),
        $this->rinser->Washing(),
        $this->rinser->Rinse(),
        $this->dryer->Draining(),
        $this->dryer->Drying(),
    ];
   echo  "process starting.........".PHP_EOL.implode("", $button) .PHP_EOL. "task completed";
    }
}


?>