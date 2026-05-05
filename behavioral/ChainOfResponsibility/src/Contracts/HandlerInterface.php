<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility\Contracts;

use KykyrudzaCoding\ChainOfResponsibility\Request;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler): HandlerInterface;

    public function handle(Request $request): string;
}