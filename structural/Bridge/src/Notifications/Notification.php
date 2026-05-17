<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Bridge\Notifications;

use KykyrudzaCoding\Bridge\Contracts\ChannelInterface;

abstract class Notification
{
    public function __construct(
        protected ChannelInterface $channel
    ) {}

    abstract public function send(string $message): string;
}
