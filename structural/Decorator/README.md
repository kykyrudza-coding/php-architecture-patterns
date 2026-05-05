# Decorator (PHP)

## About

Decorator is a structural design pattern that allows adding new behavior to an object dynamically without changing its class.

## Example

This project implements a coffee system.

You can extend a basic coffee by adding:

* milk
* sugar
* syrup

Each decorator adds cost and description without modifying the original object.

## Example usage

```php
$coffee = new SimpleCoffee();

$coffee = new MilkDecorator($coffee);
$coffee = new SugarDecorator($coffee);
$coffee = new SyrupDecorator($coffee);

echo $coffee->getDescription() . ' | Cost: ' . $coffee->getCost();
```

## Purpose

* add functionality dynamically
* avoid modifying existing classes
* follow open/closed principle
