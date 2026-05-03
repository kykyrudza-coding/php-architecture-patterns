<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use KykyrudzaCoding\Repository\Application;
use KykyrudzaCoding\Repository\Repositories\InMemoryUserRepository;

$app = new Application(new InMemoryUserRepository());

$app->run();