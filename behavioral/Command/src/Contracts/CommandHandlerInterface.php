<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Command\Contracts;

interface CommandHandlerInterface
{
    public function handle(CommandInterface $command): string;
}