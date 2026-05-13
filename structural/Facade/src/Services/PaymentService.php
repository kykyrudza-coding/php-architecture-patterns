<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Facade\Services;

class PaymentService
{
    public function pay(float $amount): bool
    {
        return $amount > 0;
    }
}
