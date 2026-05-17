<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Bridge\Contracts;

interface ChannelInterface
{
    public function send(string $message): string;
}
