<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DependencyInjection\Mailers;

use KykyrudzaCoding\DependencyInjection\Contracts\MailerInterface;

class SmtpMailer implements MailerInterface
{

    public function send(string $email, string $message): string
    {
        return "SMTP mail sent to {$email} with message: {$message}";
    }
}