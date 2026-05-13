<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Proxy\Proxies;

use KykyrudzaCoding\Proxy\Contracts\ImageInterface;
use KykyrudzaCoding\Proxy\Images\RealImage;

class ImageProxy implements ImageInterface
{
    private ?RealImage $realImage = null;

    public function __construct(
        private readonly string $filename
    ) {}

    public function display(): string
    {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->filename);

            return "Loading $this->filename" . PHP_EOL . $this->realImage->display();
        }

        return $this->realImage->display();
    }
}
