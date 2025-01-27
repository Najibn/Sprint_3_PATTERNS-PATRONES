<?php
require_once "RefactoredTigger.php";

$singleton  = RefactoredTigger::getInstance();
$singleton2 = RefactoredTigger::getInstance();
$singleton3 = RefactoredTigger::getInstance();

 echo  PHP_EOL ;

//more test to verify one instance
if ($singleton === $singleton2 && $singleton3 === $singleton2) {
    echo "Seems there is only  one Tigger object!" . PHP_EOL;
} else {
    echo "It seems unreasonable to expect that there will be More than one Tigger object!" . PHP_EOL;
}

//5 roars
echo $singleton->Roar() . PHP_EOL;
echo $singleton->Roar() . PHP_EOL;
echo $singleton->Roar() . PHP_EOL;
echo $singleton->Roar() . PHP_EOL;
echo $singleton->Roar() . PHP_EOL;

echo "roar count: " . $singleton->getCount() . PHP_EOL;
