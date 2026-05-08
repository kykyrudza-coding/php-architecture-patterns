<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Command\Bus;

use KykyrudzaCoding\Command\Contracts\CommandHandlerInterface;
use KykyrudzaCoding\Command\Contracts\CommandInterface;
use RuntimeException;

class CommandBus
{
    private array $handlers = [];

    public function register(string $command, CommandHandlerInterface $handler): void
    {
        $this->handlers[$command] = $handler;
    }

    public function dispatch(CommandInterface $command): string
    {
        $commandClass = $command::class;

        if (!isset($this->handlers[$commandClass])) {
            throw new RuntimeException("Handler for $commandClass not found.");
        }

        return $this->handlers[$commandClass]->handle($command);
    }
}