<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Command\Handlers;

use InvalidArgumentException;
use KykyrudzaCoding\Command\Commands\CreateOrderCommand;
use KykyrudzaCoding\Command\Contracts\CommandHandlerInterface;
use KykyrudzaCoding\Command\Contracts\CommandInterface;

class CreateOrderHandler implements CommandHandlerInterface
{

    public function handle(CommandInterface $command): string
    {
        if (!$command instanceof CreateOrderCommand) {
            throw new InvalidArgumentException('Invalid command for CreateOrderHandler.');
        }

        return "Order #$command->orderId created for $command->customerEmail. Amount: $command->amount";
    }
}