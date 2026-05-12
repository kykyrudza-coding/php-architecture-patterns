<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Mediator\Users;

use KykyrudzaCoding\Mediator\Contracts\MediatorInterface;
use KykyrudzaCoding\Mediator\Contracts\UserInterface;

readonly class User implements UserInterface
{

    public function __construct(
        private string $name,
        private MediatorInterface $mediator,
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): void
    {
        echo "{$this->name} sends: {$message}" . PHP_EOL;
        $this->mediator->send($message, $this);
    }

    public function receive(string $message): void
    {
        echo "{$this->name} receives: {$message}" . PHP_EOL;
    }
}