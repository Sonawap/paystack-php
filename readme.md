# Sonawap Paystack PHP library
Helps you manage and use Packstack's api

## To Start run

```bash
Composer require sonawap/paystack
```


## Define your paystack key

Go to vendor > sonawap > paystack > core > config > config.php then replace with your key

Create a new file index.php

Include the autoload file

```php
<?php
require 'vendor/autoload.php';
```

Using the Library


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
```
```php
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
```
```php
/// Check Authorization

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

```php
/// Partial_debits

$transaction->partial_debit($fields) //$field as to be array
```

```php
/// Total Transaction

$transaction->transactionTotal($fields) //$field as to be array
```
Example

```php
$transaction->transactionTotal([
    'perPage' => 5,
    'page' => 1
]); 

```

```php
// List transactions carried out on your integration

$transaction->transactionTotal($fields) //$field as to be array
```
Example

```php
$transaction->listTransaction([
    'perPage' => 5,
    'page' => 2
]);

```

```php
// Get details of a transaction carried out on your integration.

$transaction->transactionTotal($fields) //$field as to be array
```
Example

```php
$transaction->fetchTransaction(0000000000); /// transaction id eg "0000000000"

```

```php
/// Verify Transaction

$transaction->verifyTransaction(reference) // passing the reference gotten from the initialization of the transaction
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
