<?php

declare(strict_types=1);

namespace KykyrudzaCoding\EventDispatcher\Listeners;

use KykyrudzaCoding\EventDispatcher\Contracts\ListenerInterface;
use KykyrudzaCoding\EventDispatcher\Events\UserRegisteredEvent;

class SendWelcomeEmailListener implements ListenerInterface
{
    public function handle(object $event): string
    {
        if (!$event instanceof UserRegisteredEvent) {
            return 'Unsupported event.';
        }

        return "Welcome email sent to {$event->email}";
    }
}