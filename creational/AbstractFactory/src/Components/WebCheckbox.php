<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory\Components;

use KykyrudzaCoding\AbstractFactory\Contracts\CheckboxInterface;

class WebCheckbox implements CheckboxInterface
{
    public function render(): string
    {
        return 'Render web checkbox';
    }
}
