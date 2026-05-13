# Composite Pattern (PHP)

## About

Composite is a structural design pattern that allows treating individual objects and groups of objects in the same way.

## Example

This project implements a simple file system.

The file system contains:

* files
* folders
* nested folders

Both files and folders use the same interface, so the application can calculate size without knowing the concrete type.

## Example usage

```php
$folder = new Folder('Documents');

$folder->add(new File('resume.pdf', 120));
$folder->add(new File('photo.jpg', 350));

echo $folder->getSize();
```

## Purpose

* build tree structures
* treat single objects and groups uniformly
* simplify client code
* keep recursive logic inside composite objects
