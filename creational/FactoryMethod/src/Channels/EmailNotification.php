<?php

declare(strict_types=1);

namespace KykyrudzaCoding\FactoryMethod\Channels;

use KykyrudzaCoding\FactoryMethod\Contracts\NotificationInterface;

class EmailNotification implements NotificationInterface
{
    public function send(string $message): string
    {
        return "Email notification sent: $message";
    }
}