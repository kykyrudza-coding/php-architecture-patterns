<?php

declare(strict_types=1);

namespace KykyrudzaCoding\State\States;

use KykyrudzaCoding\State\Context\OrderContext;
use KykyrudzaCoding\State\Contracts\OrderStateInterface;

class ShippedOrderState implements OrderStateInterface
{
    public function getName(): string
    {
        return 'shipped';
    }

    public function proceed(OrderContext $order): string
    {
        return 'Order already shipped.';
    }
}
