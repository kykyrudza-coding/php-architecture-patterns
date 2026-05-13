<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Proxy;

use KykyrudzaCoding\Proxy\Proxies\ImageProxy;

class Application
{
    public function run(): string
    {
        $image = new ImageProxy('photo.jpg');

        return $image->display() . PHP_EOL . $image->display();
    }
}
