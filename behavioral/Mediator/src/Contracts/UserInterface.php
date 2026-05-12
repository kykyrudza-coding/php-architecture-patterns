<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Mediator\Contracts;

use KykyrudzaCoding\Observer\Contracts\ObserverInterface;

interface UserInterface
{
    public function getName(): string;

    public function send(string $message): void;

    public function receive(string $message): void;
}