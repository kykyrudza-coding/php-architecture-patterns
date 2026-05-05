<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Adapter\Adapters;

use KykyrudzaCoding\Adapter\Contracts\PaymentGateway;
use KykyrudzaCoding\Adapter\Services\LiqPayService;

readonly class LiqPayAdapter implements PaymentGateway
{
    public function __construct(
        private LiqPayService $liqPay
    ) {}

    public function pay(int $amount): bool
    {
        $response = $this->liqPay->sendMoney($amount);

        return $response['status'] === 'ok';
    }
}