<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ObjectPool;

use KykyrudzaCoding\ObjectPool\Pools\ConnectionPool;

class Application
{
    public function run(): string
    {
        $pool = new ConnectionPool();

        $firstConnection = $pool->get();
        $pool->release($firstConnection);

        $secondConnection = $pool->get();

        return $firstConnection->query('SELECT * FROM users') . PHP_EOL
            . $secondConnection->query('SELECT * FROM orders');
    }
}
