<?php

declare(strict_types=1);

namespace KykyrudzaCoding\State;

use KykyrudzaCoding\State\Context\OrderContext;

class Application
{
    public function run(): string
    {
        $order = new OrderContext();

        return $order->getStatus() . PHP_EOL
            . $order->proceed() . PHP_EOL
            . $order->getStatus() . PHP_EOL
            . $order->proceed() . PHP_EOL
            . $order->getStatus() . PHP_EOL
            . $order->proceed();
    }
}
