<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Bridge\Notifications;

class AlertNotification extends Notification
{
    public function send(string $message): string
    {
        return $this->channel->send("Alert: {$message}");
    }
}
