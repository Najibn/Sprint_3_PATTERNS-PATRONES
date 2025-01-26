<?php
interface CarCouponGenerator{
    public function addSeasonDiscount(bool $isHighSeason);
    public function addStockDiscount(bool $bigStock);
}


?>