# Sonawap Paystack PHP library
Helps you manage and use Packstack's api

## To Start run

```bash
Composer require sonawap/paystack
```


## Define your paystack key

Go to vendor > sonawap > paystack > core > config > config.php then replace with your key

## Include the autoload file

```php
<?php
require 'vendor/autoload.php';
```

Using the Library

Create a new file index.php

```php
use Sonawap\Paystack\Transaction\Transaction;
use Sonawap\Paystack\Customer\Customer;
```
Create a new instance of the class

```php
$transaction = new Transaction();
$customer = new Customer();
```

Now you have access to all the methods in the classes, see docs or example for details

```php
/// initialize a transaction

$transaction->initializeTransaction($fields) //$fields as to be array
```
Example

```php
$transaction->initializeTransaction(
    $fields = [
        'email' => "customer@email.com",
        'amount' => "20000",
    ]
);

/// Charge Authorization
$transaction->chargeAuthorization($fields) //$field as to be array
```
Example
```php
$transaction->chargeAuthorization(
    $fields = [
        'email' => "customer@email.com",
    	'amount' => "20000",
    	"authorization_code" => "AUTH_72btv547",
    ]
);

/// Charge Authorization
$transaction->checkAuthorization($fields) //$field as to be array
```
Example

```php
$transaction->checkAuthorization(
    $fields = [
        'email' => "customer@email.com",
    	'amount' => "20000",
    	"authorization_code" => "AUTH_72btv547",
    ]
);
```



