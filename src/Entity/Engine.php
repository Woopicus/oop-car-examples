<?php

namespace App\Entity;

class Engine
{
    private string $type;
    private int $horsePower;

    public function __construct(string $type, int $horsePower)
    {
        $this->type = $type;
        $this->horsePower = $horsePower;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getHorsePower(): int
    {
        return $this->horsePower;
    }
}
