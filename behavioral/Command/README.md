# Command (PHP)

## About

Command is a behavioral design pattern that turns a request into a standalone object.

## Example

This project implements an order command system.

Commands:

* CreateOrderCommand
* CancelOrderCommand

Handlers process commands through a Command Bus.

## Example usage

```php
$bus = new CommandBus();

$bus->register(
    CreateOrderCommand::class,
    new CreateOrderHandler()
);

echo $bus->dispatch(
    new CreateOrderCommand(
        1,
        'user@example.com',
        1500
    )
);
```

## Purpose

* separate requests from execution
* centralize command handling
* support scalable application architecture
