<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility\Handlers;

use KykyrudzaCoding\ChainOfResponsibility\Contracts\HandlerInterface;
use KykyrudzaCoding\ChainOfResponsibility\Request;

abstract class AbstractHandler implements HandlerInterface
{
    private ?HandlerInterface $next = null;

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->next = $handler;

        return $handler;
    }

    public function handle(Request $request): string
    {
        if ($this->next === null) {
            return 'Request successfully handled!';
        }

        return $this->next->handle($request);
    }
}