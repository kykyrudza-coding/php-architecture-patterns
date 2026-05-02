<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Strategy;

use KykyrudzaCoding\Strategy\Context\PaymentContext;
use KykyrudzaCoding\Strategy\Strategies\CashPaymentStrategy;
use KykyrudzaCoding\Strategy\Strategies\PayPalPaymentStrategy;

class Application
{
    public function run(): void
    {
        $payment = new PaymentContext(new CashPaymentStrategy());

        echo $payment->pay(100) . PHP_EOL;

        $payment->setStrategy(new PayPalPaymentStrategy());

        echo $payment->pay(200) . PHP_EOL;
    }
}