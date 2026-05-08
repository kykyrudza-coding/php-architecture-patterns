<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Command\Handlers;

use InvalidArgumentException;
use KykyrudzaCoding\Command\Commands\CancelOrderCommand;
use KykyrudzaCoding\Command\Contracts\CommandHandlerInterface;
use KykyrudzaCoding\Command\Contracts\CommandInterface;

class CancelOrderHandler implements CommandHandlerInterface
{

    public function handle(CommandInterface $command): string
    {
        if(!$command instanceof CancelOrderCommand) {
            throw new InvalidArgumentException('Invalid command for CancelOrderHandler.');
        }

        return "Order #$command->orderId cancelled. Reason: $command->reason";
    }
}