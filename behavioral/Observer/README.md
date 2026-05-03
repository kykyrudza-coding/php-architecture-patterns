# Observer (PHP)

## About

Observer is a behavioral design pattern that allows objects to subscribe to events and get notified when the state of another object changes.

## Example

This project implements an order notification system.

When the order status changes, all observers are notified:

* Email
* SMS
* Logger

## Example usage

```php id="z3m8qk"
$order = new Order();

$order->attach(new EmailObserver());
$order->attach(new SmsObserver());
$order->attach(new LoggerObserver());

$order->setStatus('created');
$order->setStatus('shipped');
$order->setStatus('delivered');
```

## Purpose

* notify multiple objects automatically
* decouple sender and receivers
* implement event-driven behavior
