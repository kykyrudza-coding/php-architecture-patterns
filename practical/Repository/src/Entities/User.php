<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Repository\Entities;

readonly class User
{
    public function __construct(
        public int    $id,
        public string $name,
        public string $email,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getInfo(): string
    {
        return "{$this->id}: {$this->name} ({$this->email})";
    }
}