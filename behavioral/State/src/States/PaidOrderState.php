<?php

declare(strict_types=1);

namespace KykyrudzaCoding\State\States;

use KykyrudzaCoding\State\Context\OrderContext;
use KykyrudzaCoding\State\Contracts\OrderStateInterface;

class PaidOrderState implements OrderStateInterface
{
    public function getName(): string
    {
        return 'paid';
    }

    public function proceed(OrderContext $order): string
    {
        $order->setState(new ShippedOrderState());

        return 'Order shipped.';
    }
}
