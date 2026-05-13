<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Facade\Facades;

use KykyrudzaCoding\Facade\Services\InventoryService;
use KykyrudzaCoding\Facade\Services\PaymentService;
use KykyrudzaCoding\Facade\Services\ShippingService;

readonly class OrderFacade
{
    public function __construct(
        private InventoryService $inventoryService,
        private PaymentService $paymentService,
        private ShippingService $shippingService,
    ) {}

    public function placeOrder(string $product, float $amount): string
    {
        if (!$this->inventoryService->isAvailable($product)) {
            return "Product $product is not available.";
        }

        if (!$this->paymentService->pay($amount)) {
            return 'Payment failed.';
        }

        $trackingNumber = $this->shippingService->ship($product);

        return "Order placed successfully. Tracking number: $trackingNumber";
    }
}
