<?php

declare(strict_types=1);

namespace KykyrudzaCoding\State\Context;

use KykyrudzaCoding\State\Contracts\OrderStateInterface;
use KykyrudzaCoding\State\States\NewOrderState;

class OrderContext
{
    private OrderStateInterface $state;

    public function __construct()
    {
        $this->state = new NewOrderState();
    }

    public function setState(OrderStateInterface $state): void
    {
        $this->state = $state;
    }

    public function getStatus(): string
    {
        return 'Current state: ' . $this->state->getName();
    }

    public function proceed(): string
    {
        return $this->state->proceed($this);
    }
}
