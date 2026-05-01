<?php

namespace KykyrudzaCoding\FactoryMethod\Enums;

enum NotificationFactoryEnum: string
{
    case EMAIL = 'email';
    case SMS = 'sms';
    case PUSH = 'push';
}
