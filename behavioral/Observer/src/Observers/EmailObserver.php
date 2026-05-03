<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Observer\Observers;

use KykyrudzaCoding\Observer\Contracts\ObserverInterface;

class EmailObserver implements ObserverInterface
{
    public function update(string $status): void
    {
        echo "Email: Order status changed to {$status}" . PHP_EOL;
    }
}