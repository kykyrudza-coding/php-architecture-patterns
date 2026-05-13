<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Composite\Items;

use KykyrudzaCoding\Composite\Contracts\FileSystemItemInterface;

readonly class File implements FileSystemItemInterface
{
    public function __construct(
        private string $name,
        private int $size
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
