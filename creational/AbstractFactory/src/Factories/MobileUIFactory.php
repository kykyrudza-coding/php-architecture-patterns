<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory\Factories;

use KykyrudzaCoding\AbstractFactory\Components\MobileButton;
use KykyrudzaCoding\AbstractFactory\Components\MobileCheckbox;
use KykyrudzaCoding\AbstractFactory\Contracts\ButtonInterface;
use KykyrudzaCoding\AbstractFactory\Contracts\CheckboxInterface;
use KykyrudzaCoding\AbstractFactory\Contracts\UIFactoryInterface;

class MobileUIFactory implements UIFactoryInterface
{
    public function createButton(): ButtonInterface
    {
        return new MobileButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new MobileCheckbox();
    }
}
