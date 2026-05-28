<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory\Components;

use KykyrudzaCoding\AbstractFactory\Contracts\ButtonInterface;

class WebButton implements ButtonInterface
{
    public function render(): string
    {
        return 'Render web button';
    }
}
