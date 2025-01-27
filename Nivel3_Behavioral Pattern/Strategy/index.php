<?php
require_once "CarCouponGeneratorInterface.php";
require_once "BmwCuoponGenerator.php";
require_once "MercedesCuoponGenerator.php";

$bmw =  new BmwCuoponGenerator();
$benz = new MercedesCuoponGenerator();

$isHighSeason = false;
$bigStock     = true;

echo "BMW Coupon: " . $bmw->addSeasonDiscount($isHighSeason) . PHP_EOL; 
echo "discount: "   .$bmw->addStockDiscount($bigStock) . "%" . PHP_EOL; 

echo "Mercedes Coupon: " . ($benz->addSeasonDiscount($isHighSeason) . PHP_EOL. "discount " .$benz->addStockDiscount($bigStock)) . "%";

/*
$bmw =  new BmwCuoponGenerator();
function generateCoupon(CarCouponGenerator $carCouponGenerator, $isHighSeason, $bigStock)
{
    $seasonDiscount = $carCouponGenerator->addSeasonDiscount($isHighSeason);
    $stockDiscount = $carCouponGenerator->addStockDiscount($bigStock);
    return $seasonDiscount + $stockDiscount;
}

$bmw = new BmwCuoponGenerator();
$benz = new MercedesCuoponGenerator();

$isHighSeason = false;
$bigStock = true;

echo "BMW Coupon: " . generateCoupon($bmw, $isHighSeason, $bigStock) . "%" . PHP_EOL;
echo "Mercedes Coupon: " . generateCoupon($benz, $isHighSeason, $bigStock) . "%" . PHP_EOL;
$benz = new MercedesCuoponGenerator();
*/


//¿question?
// According to the previous considerations, 
// we need to use the strategy pattern so that given the make of a car, 
// our program calculates the discount.

// Make sure to keep the following in mind:

// You need to create a function called addSeasonDiscount that adds a discount when sales drop.
// You need to create a function called addStockDiscount that adds a discount when the inventory is too large.
// Since coupons vary depending on the type of car, 
// it would be ideal to call these functions in separate classes. 
// Therefore, it will be necessary to implement the classes bmwCuoponGenerator and mercedesCuoponGenerator.

// In fact, as the previous methods for each coupon have the same name; 
// it is necessary to create the carCouponGenerator interface 
// that forces all classes that implement it to use them, 
// including the ones we just wrote and those we would like to add in the future.

// Print the 
//coupon result for the two car brands (BMW and Mercedes) on the screen.


//classes 
//carCouponGenerator interface ...forces all classes that implement it to use them
//  bmwCuoponGenerator 
//  mercedesCuoponGenerator.

//methods 
//addSeasonDiscount  discount when sales drop.
//addStockDiscount discount when the inventory is too large.
/*
function cupounGenerator($car) {

       $discount = 0;
       $isHighSeason = false;
       $bigStock = true;

       if($car == "bmw"){
           if(!$isHighSeason) {$discount += 5;}
          if($bigStock) {$discount += 7;}
       } else if($car == "mercedes") {
          if(!$isHighSeason) {$discount += 4;}
          if($bigStock) {$discount += 10;}
       
       }
       return $cupoun = "Get {$discount}% off the price of your new car.";
}
echo cupounGenerator("bmw");
*/
