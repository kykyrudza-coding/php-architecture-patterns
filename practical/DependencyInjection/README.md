# Dependency Injection (PHP)

## About

Dependency Injection is a practical pattern where dependencies are provided from the outside instead of being created inside a class.

## Example

This project implements:

* Mailer interface
* SMTP mailer
* Notification service
* Simple DI container

The container resolves dependencies and injects them into services.

## Example usage

```php id="moe3p2"
$container = new Container();

$container->bind(
    MailerInterface::class,
    SmtpMailer::class
);

$mailer = $container->make(MailerInterface::class);

$service = new UserNotificationService($mailer);

echo $service->notify(
    'user@example.com',
    'Welcome!'
);
```

## Purpose

* reduce coupling between classes
* improve flexibility and testability
* centralize dependency management
