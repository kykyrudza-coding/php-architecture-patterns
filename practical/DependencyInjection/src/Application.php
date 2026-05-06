<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DependencyInjection;

use Exception;
use KykyrudzaCoding\DependencyInjection\Container\Container;
use KykyrudzaCoding\DependencyInjection\Contracts\MailerInterface;
use KykyrudzaCoding\DependencyInjection\Mailers\SmtpMailer;
use KykyrudzaCoding\DependencyInjection\Services\UserNotificationService;

class Application
{
    /**
     * @throws Exception
     */
    public function run(): string
    {
        $container = new Container();

        $container->bind(MailerInterface::class, SmtpMailer::class);

        /** @var MailerInterface $mailer */
        $mailer = $container->make(MailerInterface::class);

        $service = new UserNotificationService($mailer);

        return $service->notify(
            'user@example.com',
            'Hello, world!'
        );
    }
}
