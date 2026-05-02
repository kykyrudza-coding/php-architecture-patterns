# Strategy (PHP)

## About

Strategy is a behavioral design pattern that allows selecting an algorithm at runtime.

## Example

This project implements a payment system using different strategies:

* Card
* PayPal
* Cash

The strategy can be changed dynamically without modifying the main logic.

## Example usage

```php id="k2l8we"
$payment = new PaymentContext(new CardPaymentStrategy());

echo $payment->pay(1200);

$payment->setStrategy(new PayPalPaymentStrategy());

echo $payment->pay(2500);
```

## Purpose

* switch behavior at runtime
* avoid conditional logic (if/switch)
* improve flexibility and maintainability
