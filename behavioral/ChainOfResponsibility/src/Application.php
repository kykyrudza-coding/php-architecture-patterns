<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility;

use KykyrudzaCoding\ChainOfResponsibility\Handlers\AuthHandler;
use KykyrudzaCoding\ChainOfResponsibility\Handlers\ValidationHandler;
use KykyrudzaCoding\ChainOfResponsibility\Handlers\LoggingHandler;

class Application
{
    public function run(): void
    {
        $auth = new AuthHandler();
        $validation = new ValidationHandler();
        $logging = new LoggingHandler();

        $auth
            ->setNext($validation)
            ->setNext($logging);

        $request = new Request(
            userId: null,
            data: ['email' => 'user@example.com']
        );

        echo $auth->handle($request) . PHP_EOL;
    }
}