# Abstract Factory Pattern (PHP)

## About

Abstract Factory is a creational design pattern that creates families of related objects without specifying their concrete classes.

## Example

This project implements UI components for different platforms.

Each factory creates compatible components:

* web button and web checkbox
* mobile button and mobile checkbox

The application depends on the factory interface instead of concrete component classes.

## Example usage

```php
$factory = new WebUIFactory();

$button = $factory->createButton();
$checkbox = $factory->createCheckbox();

echo $button->render();
echo $checkbox->render();
```

## Purpose

* create related objects together
* hide concrete classes from client code
* keep object families consistent
* simplify switching between implementations
