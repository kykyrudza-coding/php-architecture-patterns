# Mediator (PHP)

## About
Mediator is a behavioral design pattern that reduces direct communication between objects.

Objects communicate through a mediator instead of referencing each other directly.

## Example
This project implements a simple chat room.

Users do not send messages directly to each other.  
They send messages through the ChatMediator.

## Example usage

```php
$chat = new ChatMediator();

$john = new User('John', $chat);
$jane = new User('Jane', $chat);

$chat->addUser($john);
$chat->addUser($jane);

$john->send('Hello!');