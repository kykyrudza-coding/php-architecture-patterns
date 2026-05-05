<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator\Coffee;

use KykyrudzaCoding\Decorator\Contracts\CoffeeInterface;

class SimpleCoffee implements CoffeeInterface
{

    public function getCost(): float
    {
        return 50;
    }

    public function getDescription(): string
    {
        return 'Simple Coffee';
    }
}