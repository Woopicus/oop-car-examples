<?php

namespace App\Service;

use App\Entity\ElectricCar;
use App\Entity\GasCar;
use App\Entity\Engine;
use App\Entity\Car;

class CarFactory
{
    public static function createCar(string $type, string $brand, string $model, int $horsePower): Car
    {
        $engine = new Engine($type === 'electric' ? 'Electric' : 'Gasoline', $horsePower);

        return match ($type) {
            'electric' => new ElectricCar($brand, $model, $engine),
            'gas' => new GasCar($brand, $model, $engine),
            default => throw new \InvalidArgumentException("Unknown car type: {$type}")
        };
    }
}
