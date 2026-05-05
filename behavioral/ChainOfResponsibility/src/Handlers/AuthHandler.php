<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility\Handlers;

use KykyrudzaCoding\ChainOfResponsibility\Request;

class AuthHandler extends AbstractHandler
{
    public function handle(Request $request): string
    {
        if ($request->userId === null) {
            return 'User is not authenticated!';
        }

        return parent::handle($request);
    }
}