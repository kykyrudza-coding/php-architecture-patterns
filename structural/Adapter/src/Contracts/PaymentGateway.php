<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Adapter\Contracts;

interface PaymentGateway
{
    public function pay(int $amount): bool;
}