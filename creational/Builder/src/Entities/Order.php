<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Builder\Entities;

use KykyrudzaCoding\Builder\Enums\DeliveryTypeEnum;
use KykyrudzaCoding\Builder\Enums\PaymentMethodEnum;

readonly class Order
{
    public function __construct(
        private array $items,
        private PaymentMethodEnum $paymentMethod,
        private DeliveryTypeEnum $deliveryType,
        private float $discount = 0,
    ){}

    public function getTotal(): float
    {
        $total = array_sum(
            array_map(fn(OrderItem $item) => $item->getTotal(), $this->items)
        );

        return $total - ($total * $this->discount / 100);
    }

    public function getSummary(): string
    {
        return sprintf(
            'Order total: %.2f | Delivery: %s | Payment: %s | Discount: %.0f%%',
            $this->getTotal(),
            $this->deliveryType->value,
            $this->paymentMethod->value,
            $this->discount
        );
    }
}