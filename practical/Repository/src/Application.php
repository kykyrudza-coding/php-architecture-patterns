<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Repository;

use KykyrudzaCoding\Repository\Contracts\UserRepositoryInterface;
use KykyrudzaCoding\Repository\Entities\User;

readonly class Application
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function run(): void
    {
        $this->userRepository->save(
            new User(1, 'John Doe', 'john@example.com')
        );

        $this->userRepository->save(
            new User(2, 'Jane Smith', 'jane@example.com')
        );

        foreach ($this->userRepository->findAll() as $user) {
            echo $user->getInfo() . PHP_EOL;
        }
    }
}