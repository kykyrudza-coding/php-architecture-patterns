<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Facade;

use KykyrudzaCoding\Facade\Facades\OrderFacade;
use KykyrudzaCoding\Facade\Services\InventoryService;
use KykyrudzaCoding\Facade\Services\PaymentService;
use KykyrudzaCoding\Facade\Services\ShippingService;

class Application
{
    public function run(): string
    {
        $facade = new OrderFacade(
            new InventoryService(),
            new PaymentService(),
            new ShippingService()
        );

        return $facade->placeOrder('Laptop', 1200.00);
    }
}
