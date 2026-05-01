<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Singleton\Enums;

enum LogLevelEnum: string
{
    case INFO = 'info';
    case WARNING = 'warning';
    case ERROR = 'error';
}
