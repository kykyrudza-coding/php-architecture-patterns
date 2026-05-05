<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator\Contracts;

interface CoffeeInterface
{
    public function getCost(): float;

    public function getDescription(): string;
}