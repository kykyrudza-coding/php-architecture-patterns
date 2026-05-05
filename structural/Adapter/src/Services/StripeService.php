<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Adapter\Services;

class StripeService
{
    public function makePayment(int $sum): string
    {
        return "Payment of $sum was made using Stripe";
    }
}