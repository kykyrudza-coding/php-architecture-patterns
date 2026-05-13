# Proxy Pattern (PHP)

## About

Proxy is a structural design pattern that provides a substitute object to control access to another object.

## Example

This project implements an image loading system.

The proxy controls access to a real image object and creates it only when it is needed.

You can call the same method on the proxy:

* the first call loads the real image
* the next calls reuse the already loaded image

## Example usage

```php
$image = new ImageProxy('photo.jpg');

echo $image->display();
echo $image->display();
```

## Purpose

* control access to an expensive object
* delay object creation until it is really needed
* keep client code dependent on a common interface
* add behavior without changing the real object
