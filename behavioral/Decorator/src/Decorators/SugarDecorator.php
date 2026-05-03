<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator\Decorators;

class SugarDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', sugar';
    }
}