# State Pattern (PHP)

## About

State is a behavioral design pattern that allows an object to change its behavior when its internal state changes.

## Example

This project implements an order state flow.

The order can move through several states:

* new
* paid
* shipped

Each state controls what happens when the order proceeds to the next step.

## Example usage

```php
$order = new OrderContext();

echo $order->proceed();
echo $order->proceed();
echo $order->proceed();
```

## Purpose

* move state-specific behavior into separate classes
* avoid large conditional blocks
* make state transitions explicit
* keep the context class simple
