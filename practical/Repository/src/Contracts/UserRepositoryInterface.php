<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Repository\Contracts;

use KykyrudzaCoding\Repository\Entities\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;

    public function findById(int $id): ?User;

    public function findAll(): array;
}