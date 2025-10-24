<?php

namespace App\Interface;

interface DrivableInterface
{
    public function start(): string;
    public function stop(): string;
    public function accelerate(int $speed): string;
}
