<?php

declare(strict_types=1);

namespace KykyrudzaCoding\FactoryMethod\Factories;

use KykyrudzaCoding\FactoryMethod\Channels\EmailNotification;
use KykyrudzaCoding\FactoryMethod\Channels\PushNotification;
use KykyrudzaCoding\FactoryMethod\Channels\SMSNotification;
use KykyrudzaCoding\FactoryMethod\Contracts\NotificationInterface;
use KykyrudzaCoding\FactoryMethod\Enums\NotificationFactoryEnum;

class NotificationFactory
{
    private array $channels = [
        NotificationFactoryEnum::EMAIL->value => EmailNotification::class,
        NotificationFactoryEnum::SMS->value => SMSNotification::class,
        NotificationFactoryEnum::PUSH->value => PushNotification::class,
    ];

    public function create(NotificationFactoryEnum $type): NotificationInterface
    {
        return new $this->channels[$type->value];
    }
}