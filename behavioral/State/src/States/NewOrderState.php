<?php

declare(strict_types=1);

namespace KykyrudzaCoding\State\States;

use KykyrudzaCoding\State\Context\OrderContext;
use KykyrudzaCoding\State\Contracts\OrderStateInterface;

class NewOrderState implements OrderStateInterface
{
    public function getName(): string
    {
        return 'new';
    }

    public function proceed(OrderContext $order): string
    {
        $order->setState(new PaidOrderState());

        return 'Order paid.';
    }
}
