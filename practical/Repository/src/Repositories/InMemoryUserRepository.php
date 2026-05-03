<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Repository\Repositories;

use KykyrudzaCoding\Repository\Contracts\UserRepositoryInterface;
use KykyrudzaCoding\Repository\Entities\User;

class InMemoryUserRepository implements UserRepositoryInterface
{
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }

    public function findById(int $id): ?User
    {
        return $this->users[$id] ?? null;
    }

    public function findAll(): array
    {
        return $this->users;
    }
}