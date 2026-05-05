<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Adapter\Services;

class LiqPayService
{
    public function sendMoney(int $amount): array
    {
        return [
            'status' => $amount > 0 ? 'ok' : 'error',
        ];
    }
}