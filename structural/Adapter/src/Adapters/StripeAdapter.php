<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Adapter\Adapters;

use KykyrudzaCoding\Adapter\Contracts\PaymentGateway;
use KykyrudzaCoding\Adapter\Services\StripeService;

readonly class StripeAdapter implements PaymentGateway
{
    public function __construct(
        private StripeService $stripe
    ) {}

    public function pay(int $amount): bool
    {
        return $this->stripe->makePayment($amount) === 'success';
    }
}