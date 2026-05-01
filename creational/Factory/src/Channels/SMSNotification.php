<?php

declare(strict_types=1);

namespace KykyrudzaCoding\FactoryMethod\Channels;

use KykyrudzaCoding\FactoryMethod\Contracts\NotificationInterface;

class SMSNotification implements NotificationInterface
{
    public function send(string $message): string
    {
        return "SMS notification sent: $message";
    }
}