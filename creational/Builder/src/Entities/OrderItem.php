<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Builder\Entities;

readonly class OrderItem
{
    public function __construct(
        public string $name,
        public int    $quantity,
        public float  $price,
    ){}

    public function getTotal(): float
    {
        return $this->price * $this->quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }
}