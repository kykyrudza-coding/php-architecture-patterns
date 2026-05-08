<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Command;


use KykyrudzaCoding\Command\Bus\CommandBus;
use KykyrudzaCoding\Command\Commands\CancelOrderCommand;
use KykyrudzaCoding\Command\Commands\CreateOrderCommand;
use KykyrudzaCoding\Command\Handlers\CancelOrderHandler;
use KykyrudzaCoding\Command\Handlers\CreateOrderHandler;

class Application
{
    public function run(): void
    {
        $bus = new CommandBus();

        $bus->register(CreateOrderCommand::class, new CreateOrderHandler());
        $bus->register(CancelOrderCommand::class, new CancelOrderHandler());

        echo $bus->dispatch(
                new CreateOrderCommand(1, 'user@example.com', 1500)
            ) . PHP_EOL;

        echo $bus->dispatch(
                new CancelOrderCommand(1, 'Customer request')
            ) . PHP_EOL;
    }
}