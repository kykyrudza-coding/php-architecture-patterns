# Unit Of Work (PHP)

## About

Unit Of Work is a practical architecture pattern that tracks changes to objects and commits them as a single operation.

## Example

This project implements a product save flow.

The unit of work can register:

* new products
* dirty products
* removed products

The repository receives changes only when `commit()` is called.

## Example usage

```php
$unitOfWork = new UnitOfWork(new ProductRepository());

$unitOfWork->registerNew(new Product(1, 'Laptop'));

echo $unitOfWork->commit();
```

## Purpose

* collect changes before saving
* coordinate repository operations
* keep persistence actions in one place
* make transaction-like workflows explicit
