<?php

declare(strict_types=1);

use KykyrudzaCoding\Adapter\Adapters\StripeAdapter;
use KykyrudzaCoding\Adapter\Application;
use KykyrudzaCoding\Adapter\Services\StripeService;

require_once __DIR__ . '/../vendor/autoload.php';

$stripeService = new StripeService();
$paymentGateway = new StripeAdapter($stripeService);

$app = new Application($paymentGateway);

$app->checkout(1000);