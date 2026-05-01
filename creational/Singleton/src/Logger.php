<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Singleton;

use Exception;
use KykyrudzaCoding\Singleton\Enums\LogLevelEnum;
use KykyrudzaCoding\Singleton\Handlers\ConsoleHandler;
use KykyrudzaCoding\Singleton\Handlers\FileHandler;

class Logger
{
    private static ?self $instance = null;

    private ConsoleHandler $consoleHandler;
    private FileHandler $fileHandler;

    private function __construct()
    {
        $this->consoleHandler = new ConsoleHandler();
        $this->fileHandler = new FileHandler(__DIR__ . '/../logs/app.log');
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function log(LogLevelEnum $level, string $message): void
    {
        $formattedMessage = sprintf(
            '[%s] %s: %s',
            date('Y-m-d H:i:s'),
            strtoupper($level->value),
            $message
        );

        $this->consoleHandler->handle($formattedMessage);
        $this->fileHandler->handle($formattedMessage);
    }

    public function __clone(): void {}

    /**
     * @throws Exception
     */
    public function __wakeup(): void
    {
        throw new Exception('Cannot unserialize singleton');
    }
}