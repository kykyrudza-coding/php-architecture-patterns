<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DTO\Services;

use KykyrudzaCoding\DTO\DTOs\UserData;

class UserService
{
    public function register(UserData $data): string
    {
        return "User {$data->name} registered with email {$data->email}";
    }
}
