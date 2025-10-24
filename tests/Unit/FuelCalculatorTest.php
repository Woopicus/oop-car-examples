<?php

namespace App\Tests\Unit;

use App\Entity\ElectricCar;
use App\Entity\GasCar;
use App\Entity\Engine;
use App\Service\FuelCalculator;
use PHPUnit\Framework\TestCase;

class FuelCalculatorTest extends TestCase
{
    public function testElectricCarRangeCalculation(): void
    {
        $calc = new FuelCalculator();
        $car = new ElectricCar('Tesla', 'Model Y', new Engine('Electric', 300));

        $range = $calc->calculateRange($car, 10); // 10 kWh
        $this->assertEquals(60.0, $range);
    }

    public function testGasCarRangeCalculation(): void
    {
        $calc = new FuelCalculator();
        $car = new GasCar('Audi', 'A3', new Engine('Gasoline', 200));

        $range = $calc->calculateRange($car, 10); // 10 liters
        $this->assertEquals(150.0, $range);
    }
}
