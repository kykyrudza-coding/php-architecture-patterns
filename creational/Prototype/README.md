# Prototype Pattern (PHP)

## About

Prototype is a creational design pattern that creates new objects by copying existing ones.

## Example

This project implements product prototypes.

You can create a base product and clone it into new variants:

* regular product
* discounted product
* premium product

Each clone starts with the same base state and can be changed independently.

## Example usage

```php
$prototype = new Product('Laptop', 25000);

$discounted = clone $prototype;
$discounted->setPrice(22500);

echo $prototype->getSummary();
echo $discounted->getSummary();
```

## Purpose

* create objects by cloning existing instances
* avoid repeated configuration
* simplify creation of similar objects
* keep cloned objects independent
