<?php

declare(strict_types=1);

namespace KykyrudzaCoding\FactoryMethod;

use KykyrudzaCoding\FactoryMethod\Enums\NotificationFactoryEnum;
use KykyrudzaCoding\FactoryMethod\Factories\NotificationFactory;

class Application
{
    public function send(string $message, NotificationFactoryEnum $channel): string
    {
        $factory = new NotificationFactory();

        $notification = $factory->create($channel);

        return $notification->send($message);
    }
}