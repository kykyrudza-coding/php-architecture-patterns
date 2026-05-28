<?php

declare(strict_types=1);

namespace KykyrudzaCoding\DTO;

use KykyrudzaCoding\DTO\DTOs\UserData;
use KykyrudzaCoding\DTO\Services\UserService;

class Application
{
    public function run(): string
    {
        $data = new UserData(
            'John Doe',
            'john@example.com',
            'secret'
        );

        $service = new UserService();

        return $service->register($data);
    }
}
