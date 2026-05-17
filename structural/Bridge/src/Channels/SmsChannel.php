<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Bridge\Channels;

use KykyrudzaCoding\Bridge\Contracts\ChannelInterface;

class SmsChannel implements ChannelInterface
{
    public function send(string $message): string
    {
        return "SMS: {$message}";
    }
}
