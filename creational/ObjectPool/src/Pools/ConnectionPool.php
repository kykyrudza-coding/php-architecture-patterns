<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ObjectPool\Pools;

use KykyrudzaCoding\ObjectPool\Connections\DatabaseConnection;

class ConnectionPool
{
    private array $available = [];
    private int $created = 0;

    public function get(): DatabaseConnection
    {
        if ($this->available !== []) {
            return array_pop($this->available);
        }

        $this->created++;

        return new DatabaseConnection($this->created);
    }

    public function release(DatabaseConnection $connection): void
    {
        $this->available[] = $connection;
    }
}
