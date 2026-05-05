# Adapter Pattern (PHP)

## Overview

**Adapter Pattern** is a structural design pattern that allows incompatible interfaces to work together.

It acts as a bridge between your application code and external or legacy services by converting one interface into another that your system expects.

---

## Structure

```plaintext
Application
   ↓
PaymentGateway (interface)
   ↓
Adapters (StripeAdapter, LiqPayAdapter)
   ↓
Services (StripeService, LiqPayService)
```

---

## How It Works

* The application depends on a common interface: `PaymentGateway`
* Each adapter implements this interface
* Adapters internally call their respective services
* Services may have completely different method names and response formats
* Adapters convert them into a consistent result

---

## Example Usage

```php
$gateway = new StripeAdapter(new StripeService());

$app = new Application($gateway);

$app->checkout(1000);
```

You can switch the payment provider without changing the application logic:

```php
$gateway = new LiqPayAdapter(new LiqPayService());
```

---

## Purpose

* decouple application code from external services
* unify different APIs under a single interface
* simplify switching between providers
* improve maintainability and scalability
