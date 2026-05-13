<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Proxy\Images;

use KykyrudzaCoding\Proxy\Contracts\ImageInterface;

readonly class RealImage implements ImageInterface
{
    public function __construct(
        private string $filename
    ) {}

    public function display(): string
    {
        return "Displaying $this->filename";
    }
}
