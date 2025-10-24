<?php

namespace App\Service;

use App\Entity\Car;

class FuelCalculator
{
    public function calculateRange(Car $car, float $fuelAmount): float
    {
        $efficiency = match (true) {
            $car instanceof \App\Entity\ElectricCar => 6.0,
            $car instanceof \App\Entity\GasCar => 15.0,
            default => 0
        };

        return $fuelAmount * $efficiency;
    }
}
