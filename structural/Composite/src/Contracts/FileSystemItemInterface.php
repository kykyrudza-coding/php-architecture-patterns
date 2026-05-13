<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Composite\Contracts;

interface FileSystemItemInterface
{
    public function getName(): string;

    public function getSize(): int;
}
