# DTO (PHP)

## About

DTO is a practical architecture pattern that transfers data between layers using a simple structured object.

## Example

This project implements user registration data.

The DTO contains:

* name
* email
* password

The service receives one object instead of several separate parameters.

## Example usage

```php
$data = new UserData('John Doe', 'john@example.com', 'secret');

$service = new UserService();

echo $service->register($data);
```

## Purpose

* pass structured data between layers
* reduce long parameter lists
* make method signatures cleaner
* keep input data explicit
