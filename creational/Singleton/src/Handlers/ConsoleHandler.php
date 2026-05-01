<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Singleton\Handlers;

class ConsoleHandler
{
    public function handle(string $message): void
    {
        echo $message . PHP_EOL;
    }
}