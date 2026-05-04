<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use KykyrudzaCoding\ServiceLayer\Application;

$app = new Application();

$app->run();