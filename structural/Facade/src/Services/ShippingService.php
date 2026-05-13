<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Facade\Services;

class ShippingService
{
    public function ship(string $product): string
    {
        return strtoupper(substr($product, 0, 3)) . '-1001';
    }
}
