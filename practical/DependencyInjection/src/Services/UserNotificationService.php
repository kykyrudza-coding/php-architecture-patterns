<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DependencyInjection\Services;

use KykyrudzaCoding\DependencyInjection\Contracts\MailerInterface;

readonly class UserNotificationService
{
    public function __construct(
        private MailerInterface $mailer
    ){}

    public function notify(string $email, string $message): string
    {
        return $this->mailer->send($email, $message);
    }
}