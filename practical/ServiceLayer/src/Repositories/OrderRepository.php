<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ServiceLayer\Repositories;

use KykyrudzaCoding\ServiceLayer\Entities\Order;

class OrderRepository
{
    private array $orders = [];

    public function save(Order $order): void
    {
        $this->orders[] = $order;
    }

    public function all(): array
    {
        return $this->orders;
    }
}