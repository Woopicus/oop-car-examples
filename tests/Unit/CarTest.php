<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Entity\Car;
use App\Entity\Engine;

class CarTest extends TestCase
{
    public function testCarHasCorrectBrandAndModel(): void
    {
        $engine = new Engine('Electric', 300);
        $car = new Car('Tesla', 'Model S', 2023, $engine);

        $this->assertEquals('Tesla', $car->getBrand());
        $this->assertEquals('Model S', $car->getModel());
        $this->assertEquals(2023, $car->getYear());
        $this->assertEquals('Electric', $car->getEngine()->getType());
    }
}
