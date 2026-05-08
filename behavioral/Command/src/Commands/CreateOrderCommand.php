<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Command\Commands;

use KykyrudzaCoding\Command\Contracts\CommandInterface;

readonly class CreateOrderCommand implements CommandInterface
{
    public function __construct(
        public int    $orderId,
        public string $customerEmail,
        public float  $amount,
    ) {}
}