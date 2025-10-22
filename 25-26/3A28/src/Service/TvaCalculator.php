<?php
namespace App\Service;
 
class TvaCalculator{
    public function calculateTTC(float $priceHT, float $taux): float
    {
        return $priceHT * (1 + $taux / 100);
        
    }
}