<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Bridge\Channels;

use KykyrudzaCoding\Bridge\Contracts\ChannelInterface;

class EmailChannel implements ChannelInterface
{
    public function send(string $message): string
    {
        return "Email: {$message}";
    }
}
