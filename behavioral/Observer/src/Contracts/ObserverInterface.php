<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Observer\Contracts;

interface ObserverInterface
{
    public function update(string $status): void;
}