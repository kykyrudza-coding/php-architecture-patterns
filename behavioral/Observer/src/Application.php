<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Observer;

use KykyrudzaCoding\Observer\Observers\EmailObserver;
use KykyrudzaCoding\Observer\Observers\LoggerObserver;
use KykyrudzaCoding\Observer\Observers\SmsObserver;
use KykyrudzaCoding\Observer\Subjects\Order;

class Application
{
    public function run(): void
    {
        $order = new Order();

        $order->attach(new EmailObserver());
        $order->attach(new LoggerObserver());
        $order->attach(new SmsObserver());

        $order->setStatus('created');
        $order->setStatus('shipped');
        $order->setStatus('delivered');
    }
}