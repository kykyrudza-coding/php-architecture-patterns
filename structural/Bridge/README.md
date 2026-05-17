# Bridge Pattern (PHP)

## About

Bridge is a structural design pattern that separates an abstraction from its implementation so they can vary independently.

## Example

This project implements notification senders and message channels.

The abstraction is represented by notifications:

* alert notification
* reminder notification

The implementation is represented by channels:

* email channel
* SMS channel

You can combine any notification with any channel without changing either hierarchy.

## Example usage

```php
$notification = new AlertNotification(new EmailChannel());

echo $notification->send('Server is down');
```

## Purpose

* separate abstraction from implementation
* avoid class explosion from many combinations
* allow both sides to evolve independently
* keep code flexible and reusable
