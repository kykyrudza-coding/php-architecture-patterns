# PHP Architecture Patterns

## About

This repository contains examples of architecture and design patterns in PHP.

Each pattern is implemented as a small standalone project with its own:

* `composer.json`
* `README.md`
* `src/` directory
* `examples/basic_usage.php`

## Patterns

#### Creational

#### Structural

#### Behavioral

#### Practical

## Usage

Open any pattern directory and generate autoload files:

```bash
composer dump-autoload
```

Run the example:

```bash
php examples/basic_usage.php
```

Example:

```bash
cd structural/Facade
composer dump-autoload
php examples/basic_usage.php
```

## Requirements

* PHP 8.1+
* Composer
