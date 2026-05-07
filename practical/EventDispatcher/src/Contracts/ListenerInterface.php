<?php

declare(strict_types=1);

namespace KykyrudzaCoding\EventDispatcher\Contracts;

interface ListenerInterface
{
    public function handle(object $event): string;
}