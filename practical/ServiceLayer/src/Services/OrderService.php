<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ServiceLayer\Services;

use KykyrudzaCoding\ServiceLayer\Entities\Order;
use KykyrudzaCoding\ServiceLayer\Repositories\OrderRepository;

readonly class OrderService
{
    public function __construct(
        private OrderRepository $orderRepository
    ) {}

    public function createOrder(
        int $id,
        float $amount,
        float $discount,
    ): Order
    {
        $total = $amount - ($amount * $discount / 100);

        $order = new Order($id, $amount, $discount, $total);

        $this->orderRepository->save($order);

        return $order;
    }

    public function getOrders(): array
    {
        return $this->orderRepository->all();
    }
}