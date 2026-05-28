<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory\Contracts;

interface UIFactoryInterface
{
    public function createButton(): ButtonInterface;

    public function createCheckbox(): CheckboxInterface;
}
