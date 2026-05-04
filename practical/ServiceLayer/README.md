# Service Layer (PHP)

## About

Service Layer is a practical pattern that contains business logic and separates it from other parts of the application.

## Example

This project implements an order system.

The service handles:

* creating orders
* applying discounts
* calculating totals
* saving data via repository

## Example usage

```php
$service = new OrderService(new OrderRepository());

$service->createOrder(1, 1500, 10);

foreach ($service->getOrders() as $order) {
    echo $order->getSummary();
}
```

## Purpose

* separate business logic
* keep code clean and organized
* improve maintainability
