<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Decorator;

use KykyrudzaCoding\Decorator\Coffee\SimpleCoffee;
use KykyrudzaCoding\Decorator\Decorators\MilkDecorator;
use KykyrudzaCoding\Decorator\Decorators\SugarDecorator;
use KykyrudzaCoding\Decorator\Decorators\SyrupDecorator;

class Application
{
    public function run(): string
    {
        $coffee = new SimpleCoffee();

        $coffee = new MilkDecorator($coffee);
        $coffee = new SugarDecorator($coffee);
        $coffee = new SyrupDecorator($coffee);

        return $coffee->getDescription() . ' | Cost: ' . $coffee->getCost();
    }
}