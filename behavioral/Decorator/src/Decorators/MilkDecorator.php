<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator\Decorators;

class MilkDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return $this->coffee->getCost() + 10;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', milk';
    }
}