# Repository (PHP)

## About
Repository is a practical design pattern that separates data access logic from the main application logic.

## Example
This project implements a user repository.

The application works with users through an interface, without knowing where the data is stored.

## Example usage

```php
$app = new Application(new InMemoryUserRepository());

$app->run();
```

* separate data access logic
* make code easier to test
* allow replacing storage implementation