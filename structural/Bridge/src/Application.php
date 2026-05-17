<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Bridge;

use KykyrudzaCoding\Bridge\Channels\EmailChannel;
use KykyrudzaCoding\Bridge\Channels\SmsChannel;
use KykyrudzaCoding\Bridge\Notifications\AlertNotification;
use KykyrudzaCoding\Bridge\Notifications\ReminderNotification;

class Application
{
    public function run(): string
    {
        $alert = new AlertNotification(new EmailChannel());
        $reminder = new ReminderNotification(new SmsChannel());

        return $alert->send('Server is down') . PHP_EOL
            . $reminder->send('Meeting at 18:00');
    }
}
