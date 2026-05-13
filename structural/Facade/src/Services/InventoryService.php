<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Facade\Services;

class InventoryService
{
    public function isAvailable(string $product): bool
    {
        return $product !== '';
    }
}
