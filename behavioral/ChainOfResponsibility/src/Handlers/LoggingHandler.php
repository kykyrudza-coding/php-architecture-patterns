<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility\Handlers;

use KykyrudzaCoding\ChainOfResponsibility\Request;

class LoggingHandler extends AbstractHandler
{
    public function handle(Request $request): string
    {
        echo 'Logging request for user ID: ' . $request->userId . PHP_EOL;

        return parent::handle($request);
    }
}