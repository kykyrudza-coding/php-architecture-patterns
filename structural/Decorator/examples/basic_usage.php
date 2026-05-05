<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use KykyrudzaCoding\Decorator\Application;

$app = new Application();

echo $app->run() . PHP_EOL;