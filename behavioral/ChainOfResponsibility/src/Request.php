<?php

declare(strict_types=1);

namespace KykyrudzaCoding\ChainOfResponsibility;

readonly class Request
{
    public function __construct(
        public ?int $userId,
        public array $data,
    ){}
}