# Factory Method (PHP)

## About

Factory Method is a creational design pattern that creates objects without specifying their exact class.

## Structure

```
Application
   ↓
Factory → creates() → Notification (interface)
                            ↑
                ┌───────────┼───────────┐
                │           │           │
               Email       SMS         Push
```

## Example usage

```php
$channel = NotificationFactoryEnum::tryFrom('email');

$app = new Application();

echo $app->send('Hello world', $channel);
```

## Purpose

* decouple object creation from usage
* improve flexibility and scalability
