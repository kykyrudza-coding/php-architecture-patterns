<?php

declare(strict_types=1);

namespace KykyrudzaCoding\FactoryMethod\Contracts;

interface NotificationInterface
{
    public function send(string $message): string;
}