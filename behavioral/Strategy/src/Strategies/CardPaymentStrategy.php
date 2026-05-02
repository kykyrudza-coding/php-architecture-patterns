<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Strategy\Strategies;

use KykyrudzaCoding\Strategy\Contracts\PaymentStrategyInterface;

class CardPaymentStrategy implements PaymentStrategyInterface
{

    public function pay(float $amount): string
    {
        return "Paid {$amount} UAH by card.";
    }
}