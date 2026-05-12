<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Mediator\Mediators;

use KykyrudzaCoding\Mediator\Contracts\MediatorInterface;
use KykyrudzaCoding\Mediator\Contracts\UserInterface;

class ChatMediator implements MediatorInterface
{

    private array $users = [];

    public function send(string $message, UserInterface $sender): void
    {
        foreach ($this->users as $user) {
            if ($user !== $sender) {
                $user->receive($message);
            }
        }
    }

    public function addUser(UserInterface $user): void
    {
        $this->users[] = $user;
    }
}