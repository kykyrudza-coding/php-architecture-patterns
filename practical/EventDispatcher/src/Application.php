<?php

declare(strict_types=1);

namespace KykyrudzaCoding\EventDispatcher;

use KykyrudzaCoding\EventDispatcher\Dispatcher\EventDispatcher;
use KykyrudzaCoding\EventDispatcher\Events\UserRegisteredEvent;
use KykyrudzaCoding\EventDispatcher\Listeners\CreateProfileListener;
use KykyrudzaCoding\EventDispatcher\Listeners\LogRegistrationListener;
use KykyrudzaCoding\EventDispatcher\Listeners\SendWelcomeEmailListener;

class Application
{
    public function run(): void
    {
        $dispatcher = new EventDispatcher();

        $dispatcher->listen(UserRegisteredEvent::class, new SendWelcomeEmailListener());
        $dispatcher->listen(UserRegisteredEvent::class, new CreateProfileListener());
        $dispatcher->listen(UserRegisteredEvent::class, new LogRegistrationListener());

        $event = new UserRegisteredEvent(
            name: 'John Doe',
            email: 'john@example.com'
        );

        foreach ($dispatcher->dispatch($event) as $response) {
            echo $response . PHP_EOL;
        }
    }
}