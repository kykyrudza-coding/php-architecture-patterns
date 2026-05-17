<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Prototype\Entities;

class Product
{
    public function __construct(
        private string $name,
        private float $price
    ) {}

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getSummary(): string
    {
        return sprintf(
            '%s: %.2f',
            $this->name,
            $this->price
        );
    }
}
