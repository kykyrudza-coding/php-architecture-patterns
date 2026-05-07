<?php

declare(strict_types=1);

namespace KykyrudzaCoding\EventDispatcher\Listeners;

use KykyrudzaCoding\EventDispatcher\Contracts\ListenerInterface;
use KykyrudzaCoding\EventDispatcher\Events\UserRegisteredEvent;

class LogRegistrationListener implements ListenerInterface
{
    public function handle(object $event): string
    {
        if (!$event instanceof UserRegisteredEvent) {
            return 'Unsupported event.';
        }

        return "User registration logged: {$event->email}";
    }
}