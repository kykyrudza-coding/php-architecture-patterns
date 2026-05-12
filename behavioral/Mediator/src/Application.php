<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Mediator;

use KykyrudzaCoding\Mediator\Mediators\ChatMediator;
use KykyrudzaCoding\Mediator\Users\User;

class Application
{
    public function run(): void
    {
        $chat = new ChatMediator();

        $john = new User('John', $chat);
        $jane = new User('Jane', $chat);
        $alex = new User('Alex', $chat);

        $chat->addUser($john);
        $chat->addUser($jane);
        $chat->addUser($alex);

        $john->send('Hello everyone!');
        $jane->send('Hi John!');
    }
}