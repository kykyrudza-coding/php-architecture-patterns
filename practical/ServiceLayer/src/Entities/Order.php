<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ServiceLayer\Entities;

readonly class Order
{
    public function __construct(
        private int $id,
        private float $amount,
        private float $discount,
        private float $total,
    ) {}

    public function getSummary(): string
    {
        return "Order #$this->id | Amount: $this->amount | Discount: $this->discount% | Total: $this->total";
    }
}