<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Observer\Observers;

use KykyrudzaCoding\Observer\Contracts\ObserverInterface;

class LoggerObserver implements ObserverInterface
{
    public function update(string $status): void
    {
        echo "Log: Order updated → {$status}" . PHP_EOL;
    }
}