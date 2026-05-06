<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DependencyInjection\Contracts;

interface MailerInterface
{
    public function send(string $email, string $message): string;
}