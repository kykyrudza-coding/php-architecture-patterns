<?php

declare(strict_types=1);

namespace KykyrudzaCoding\State\Contracts;

use KykyrudzaCoding\State\Context\OrderContext;

interface OrderStateInterface
{
    public function getName(): string;

    public function proceed(OrderContext $order): string;
}
