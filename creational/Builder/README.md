# Builder (PHP)

## About

Builder is a creational design pattern that constructs complex objects step by step.

## Example

This project implements an Order Builder.

An order is created by gradually adding:

* items
* delivery type
* payment method
* discount

## Example usage

```php
$order = (new OrderBuilder())
    ->addItem('Laptop', 1, 25000)
    ->addItem('Mouse', 2, 500)
    ->setDeliveryType(DeliveryTypeEnum::NOVA_POSHTA)
    ->setPaymentMethod(PaymentMethodEnum::ONLINE)
    ->setDiscount(10)
    ->build();

echo $order->getSummary();
```

## Purpose

* build complex objects step by step
* improve readability of object creation
* avoid large constructors
