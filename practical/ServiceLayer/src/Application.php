<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ServiceLayer;

use KykyrudzaCoding\ServiceLayer\Repositories\OrderRepository;
use KykyrudzaCoding\ServiceLayer\Services\OrderService;

class Application
{
    public function run(): void
    {
        $repository = new OrderRepository();

        $service = new OrderService($repository);

        $service->createOrder(1, 1500, 10);
        $service->createOrder(2, 2400, 5);

        foreach ($service->getOrders() as $order) {
            echo $order->getSummary() . PHP_EOL;
        }
    }
}