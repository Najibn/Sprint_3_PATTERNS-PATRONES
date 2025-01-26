<?php
//person about to leave home to go to study/work. 
//dependencies: wallet, house keys, maybe your car/motorcycle keys or public transport card, and your smartphone.
//use dependency injection pattern.

require_once 'InterfaceItem.php';
require_once 'Wallet.php';
require_once 'HouseKeys.php';
require_once 'CarKeys.php';
require_once 'Smartphone.php';
require_once 'Person.php';


$wallet     = new Wallet();
$houseKeys  = new HouseKeys();
$carKeys    = new CarKeys();
$smartphone = new Smartphone();

//echo "Routine check!";
$kawsu = new Person($wallet, $houseKeys, $carKeys, $smartphone);
echo $kawsu->leavingHomeForWork();

// echo PHP_EOL ."Final routine checking ........".PHP_EOL;
//$person1 = new Person(new Wallet(), new HouseKeys(),new CarKeys(),new Smartphone);
// echo $person1->leavingHomeForWork();

// $persons = [$person1];
// foreach($persons as $person) {
//     echo PHP_EOL. $person->leavingHomeForWork();
// }
