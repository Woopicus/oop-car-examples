<?php

namespace App\Entity;

class Car
{
    protected string $brand;
    protected string $model;
    protected int $year;
    protected Engine $engine;

    public function __construct(string $brand, string $model, int $year, Engine $engine)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->engine = $engine;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }
}
