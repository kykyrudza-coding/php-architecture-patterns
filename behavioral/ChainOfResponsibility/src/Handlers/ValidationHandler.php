<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility\Handlers;

use KykyrudzaCoding\ChainOfResponsibility\Request;

class ValidationHandler extends AbstractHandler
{
    public function handle(Request $request): string
    {
        if (empty($request->data['email'])) {
            return 'Validation failed: email is required.';
        }

        return parent::handle($request);
    }
}