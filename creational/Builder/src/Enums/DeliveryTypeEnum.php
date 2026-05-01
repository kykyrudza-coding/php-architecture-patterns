<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Builder\Enums;

enum DeliveryTypeEnum: string
{
    case COURIER = 'courier';
    case PICKUP = 'pickup';
    case DELIVERY = 'delivery';
}
