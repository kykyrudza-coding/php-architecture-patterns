<?php

declare(strict_types=1);

namespace KykyrudzaCoding\AbstractFactory;

use KykyrudzaCoding\AbstractFactory\Contracts\UIFactoryInterface;
use KykyrudzaCoding\AbstractFactory\Factories\WebUIFactory;

class Application
{
    public function run(): string
    {
        return $this->render(new WebUIFactory());
    }

    private function render(UIFactoryInterface $factory): string
    {
        $button = $factory->createButton();
        $checkbox = $factory->createCheckbox();

        return $button->render() . PHP_EOL . $checkbox->render();
    }
}
