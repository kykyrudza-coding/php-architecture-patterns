<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DependencyInjection\Container;

use Exception;

class Container
{
    private array $bindings = [];

    public function bind(string $abstract, string $concrete): void
    {
        $this->bindings[$abstract] = $concrete;
    }

    /**
     * @throws Exception
     */
    public function make(string $abstract): object
    {
        $concrete = $this->bindings[$abstract] ?? $abstract;

        if (!class_exists($concrete)) {
            throw new Exception("Class {$concrete} not found");
        }
    }
}