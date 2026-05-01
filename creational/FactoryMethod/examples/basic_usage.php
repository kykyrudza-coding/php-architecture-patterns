<?php

include_once __DIR__ . '/../vendor/autoload.php';

use KykyrudzaCoding\FactoryMethod\Application;
use KykyrudzaCoding\FactoryMethod\Enums\NotificationFactoryEnum;

$app = new Application();

while (true) {
    $channelInput = readline('Enter channel: ');

    $channel = NotificationFactoryEnum::tryFrom($channelInput);

    if (!$channel) {
        echo 'Invalid channel' . PHP_EOL;
        continue;
    }

    $message = readline('Enter message: ');

    echo $app->send($message, $channel) . PHP_EOL;
}