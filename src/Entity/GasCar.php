<?php

namespace App\Entity;

class GasCar extends Car
{
    public function __construct(string $brand, string $model, Engine $engine)
    {
        parent::__construct($brand, $model, 2024, $engine);
    }
}
