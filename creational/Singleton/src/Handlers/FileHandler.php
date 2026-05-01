<?php

namespace KykyrudzaCoding\Singleton\Handlers;

readonly class FileHandler
{
    public function __construct(
        private string $filePath
    ) {}

    public function handle(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}