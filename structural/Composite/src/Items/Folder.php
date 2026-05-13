<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Composite\Items;

use KykyrudzaCoding\Composite\Contracts\FileSystemItemInterface;

class Folder implements FileSystemItemInterface
{
    private array $items = [];

    public function __construct(
        private readonly string $name
    ) {}

    public function add(FileSystemItemInterface $item): void
    {
        $this->items[] = $item;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return array_sum(
            array_map(fn (FileSystemItemInterface $item) => $item->getSize(), $this->items)
        );
    }
}
