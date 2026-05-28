<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory\Factories;

use KykyrudzaCoding\AbstractFactory\Components\WebButton;
use KykyrudzaCoding\AbstractFactory\Components\WebCheckbox;
use KykyrudzaCoding\AbstractFactory\Contracts\ButtonInterface;
use KykyrudzaCoding\AbstractFactory\Contracts\CheckboxInterface;
use KykyrudzaCoding\AbstractFactory\Contracts\UIFactoryInterface;

class WebUIFactory implements UIFactoryInterface
{
    public function createButton(): ButtonInterface
    {
        return new WebButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new WebCheckbox();
    }
}
