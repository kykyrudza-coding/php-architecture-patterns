<?php

declare(strict_types=1);

namespace KykyrudzaCoding\EventDispatcher\Events;

readonly class UserRegisteredEvent
{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}