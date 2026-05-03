<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator\Decorators;

use KykyrudzaCoding\Decorator\Contracts\CoffeeInterface;

class CoffeeDecorator implements CoffeeInterface
{
    public function __construct(
        protected CoffeeInterface $coffee
    ) {}

    public function getCost(): float
    {
        return $this->coffee->getCost();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription();
    }
}