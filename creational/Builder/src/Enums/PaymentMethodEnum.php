<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Builder\Enums;

enum PaymentMethodEnum: string
{
    case CARD = 'card';
    case CASH = 'cash';
    case ONLINE = 'online';
}
