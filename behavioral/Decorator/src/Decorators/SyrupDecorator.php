<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator\Decorators;

class SyrupDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return $this->coffee->getCost() + 15;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', syrup';
    }
}