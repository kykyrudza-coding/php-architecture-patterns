<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DTO\DTOs;

readonly class UserData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}
}
