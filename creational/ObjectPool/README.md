# Object Pool Pattern (PHP)

## About

Object Pool is a creational design pattern that reuses initialized objects instead of creating new ones every time.

## Example

This project implements a database connection pool.

The pool can:

* create a connection
* reuse a released connection
* track available connections

## Example usage

```php
$pool = new ConnectionPool();

$connection = $pool->get();
$pool->release($connection);

$sameConnection = $pool->get();
```

## Purpose

* reuse expensive objects
* reduce object creation cost
* manage limited resources
* keep resource lifecycle in one place
