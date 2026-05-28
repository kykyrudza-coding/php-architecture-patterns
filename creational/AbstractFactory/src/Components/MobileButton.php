<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory\Components;

use KykyrudzaCoding\AbstractFactory\Contracts\ButtonInterface;

class MobileButton implements ButtonInterface
{
    public function render(): string
    {
        return 'Render mobile button';
    }
}
