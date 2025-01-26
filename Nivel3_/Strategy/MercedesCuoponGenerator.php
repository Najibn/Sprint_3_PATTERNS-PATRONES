<?php
require_once "CarCouponGeneratorInterface.php";
class MercedesCuoponGenerator implements CarCouponGenerator {
    public function addSeasonDiscount(bool $isHighSeason): int {
        $discount = 0;
        if (!$isHighSeason) {
            return $discount += 4;
        }
        return $discount;
    }

    public function addStockDiscount(bool $bigStock): int {
        $discount = 0;
        return $bigStock ? $discount += 10 : $discount;
    }
}



?>