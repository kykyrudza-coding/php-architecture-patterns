# Singleton (PHP)

## About

Singleton is a creational design pattern that ensures a class has only one instance.

## Example

This project implements a Logger system.

A single Logger instance is shared across the application and writes logs to:

* console
* file

## Example usage

```php
$logger = Logger::getInstance();

$logger->log(LogLevelEnum::INFO, 'Application started');
```

## Purpose

* ensure a single instance
* provide global access to logging
* centralize system behavior
