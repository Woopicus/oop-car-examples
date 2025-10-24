<?php

namespace App\Service;

use App\Entity\Car;

class CarMaintenanceService
{
    public function performMaintenance(Car $car): string
    {
        return "{$car->getBrand()} {$car->getModel()} has been serviced and cleaned.";
    }
}
