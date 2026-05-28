<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ObjectPool\Connections;

readonly class DatabaseConnection
{
    public function __construct(
        private int $id
    ) {}

    public function query(string $sql): string
    {
        return "Connection {$this->id}: {$sql}";
    }
}
