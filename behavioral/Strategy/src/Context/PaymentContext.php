<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Strategy\Context;

use KykyrudzaCoding\Strategy\Contracts\PaymentStrategyInterface;

class PaymentContext
{
    public function __construct(
        private PaymentStrategyInterface $paymentStrategy
    ){}

    public function setStrategy(PaymentStrategyInterface $paymentStrategy): void
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function pay(float $amount): string
    {
        return $this->paymentStrategy->pay($amount);
    }
}