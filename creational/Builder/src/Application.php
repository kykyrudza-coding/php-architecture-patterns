<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Builder;

use KykyrudzaCoding\Builder\Builders\OrderBuilder;
use KykyrudzaCoding\Builder\Enums\DeliveryTypeEnum;
use KykyrudzaCoding\Builder\Enums\PaymentMethodEnum;

class Application
{
    public function run(): string
    {
        $order = new OrderBuilder()
            ->addItem('Laptop', 1, 25000)
            ->addItem('Mouse', 2, 500)
            ->setDeliveryType(DeliveryTypeEnum::PICKUP)
            ->setPaymentMethod(PaymentMethodEnum::ONLINE)
            ->setDiscount(10)
            ->build();

        return $order->getSummary();
    }
}