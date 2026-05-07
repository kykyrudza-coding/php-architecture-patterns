# Event Dispatcher (PHP)

## About
Event Dispatcher is a practical pattern that allows parts of an application to react to events without being tightly connected.

## Example
This project implements user registration events.

When a user is registered, the dispatcher notifies multiple listeners:
- Send welcome email
- Create user profile
- Log registration

## Example usage

```php
$dispatcher = new EventDispatcher();

$dispatcher->listen(UserRegisteredEvent::class, new SendWelcomeEmailListener());
$dispatcher->listen(UserRegisteredEvent::class, new CreateProfileListener());

$event = new UserRegisteredEvent('John Doe', 'john@example.com');

$responses = $dispatcher->dispatch($event);