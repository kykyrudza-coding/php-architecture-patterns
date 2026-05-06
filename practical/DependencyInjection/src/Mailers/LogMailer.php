<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DependencyInjection\Mailers;

use KykyrudzaCoding\DependencyInjection\Contracts\MailerInterface;

class LogMailer implements MailerInterface
{

    public function send(string $email, string $message): string
    {
        return "Log mail sent to {$email} with message: {$message}";
    }
}