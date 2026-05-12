<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Mediator\Contracts;

interface MediatorInterface
{
    public function send(string $message, UserInterface $sender): void;

    public function addUser(UserInterface $user): void;
}