# Facade Pattern (PHP)

## About

Facade is a structural design pattern that provides a simple interface to a complex subsystem.

## Example

This project implements an order checkout system.

The facade hides several internal steps:

* checking product availability
* processing payment
* creating shipment

The application calls one method instead of working with all services directly.

## Example usage

```php
$facade = new OrderFacade(
    new InventoryService(),
    new PaymentService(),
    new ShippingService()
);

echo $facade->placeOrder('Laptop', 1200.00);
```

## Purpose

* simplify access to complex subsystems
* reduce coupling between application and services
* keep client code clean
* hide internal implementation details
