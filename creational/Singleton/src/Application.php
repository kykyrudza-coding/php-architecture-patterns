<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Singleton;

use KykyrudzaCoding\Singleton\Enums\LogLevelEnum;

class Application
{
    public function run(): void
    {
        $logger = Logger::getInstance();

        $logger->log(LogLevelEnum::INFO, 'Application started');
        $logger->log(LogLevelEnum::WARNING, 'Low memory warning');
        $logger->log(LogLevelEnum::ERROR, 'Database connection failed');
    }
}