<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Builder\Builders;

use KykyrudzaCoding\Builder\Entities\Order;
use KykyrudzaCoding\Builder\Entities\OrderItem;
use KykyrudzaCoding\Builder\Enums\DeliveryTypeEnum;
use KykyrudzaCoding\Builder\Enums\PaymentMethodEnum;

class OrderBuilder
{
    private array $items = [];
    private DeliveryTypeEnum $deliveryType = DeliveryTypeEnum::PICKUP;
    private PaymentMethodEnum $paymentMethod = PaymentMethodEnum::CASH;
    private float $discount = 0;

    public function addItem(string $name, int $quantity, float $price): self
    {
        $this->items[] = new OrderItem($name, $quantity, $price);

        return $this;
    }

    public function setDeliveryType(DeliveryTypeEnum $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    public function setPaymentMethod(PaymentMethodEnum $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function build(): Order
    {
        return new Order(
            $this->items,
            $this->paymentMethod,
            $this->deliveryType,
            $this->discount
        );
    }
}