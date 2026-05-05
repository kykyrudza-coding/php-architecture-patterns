<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Adapter;

use KykyrudzaCoding\Adapter\Contracts\PaymentGateway;

readonly class Application
{
    public function __construct(
        private  PaymentGateway $paymentGateway
    ) {}

    public function checkout(int $amount): void
    {
        $result = $this->paymentGateway->pay($amount);

        echo $result
            ? "Payment successful\n"
            : "Payment failed\n";
    }
}