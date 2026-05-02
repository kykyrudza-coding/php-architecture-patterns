<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Strategy\Contracts;

interface PaymentStrategyInterface
{
    public function pay(float $amount): string;
}