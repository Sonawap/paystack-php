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
use Sonawap\Paystack\Transaction\Plan;
use Sonawap\Paystack\Customer\Customer;
```
Create a new instance of the class

```php
$transaction = new Transaction();
$customer = new Customer();
$plan = new Plan();
```

Now you have access to all the methods in the classes, see docs or example for details

## Transaction
```php
/// initialize a transaction

$transaction->initializeTransaction($fields); //$fields as to be array

<!-- Example -->

$transaction->initializeTransaction(
    $fields = [
        'email' => "customer@email.com",
        'amount' => "20000",
    ]
);

/// Charge Authorization

$transaction->chargeAuthorization(array); //$field as to be array

/// Check Authorization

$transaction->checkAuthorization(array); //$field as to be array

/// Partial_debits

$transaction->partial_debit(array); //$field as to be array

$transaction->transactionTotal([
    'perPage' => 5,
    'page' => 1
]); 


// List transactions carried out on your integration

$transaction->transactionTotal(array); //$field as to be array

// Get details of a transaction carried out on your integration.

$transaction->transactionTotal(array); //$field as to be array

/// Verify Transaction

$transaction->verifyTransaction(reference); // passing the reference gotten from the initialization of the transaction
```
## Customer

```php

// Create a Customer
$customer->createCustomer(); // $field must be array


// Example
$result = $customer->createCustomer(
    $fields = [
        'first_name' => '',
        'last_name' => '',
        'email' => "customer@email.com"
    
    ]
);

// Desactivate Authorisation

$customer->deAuth(array);

// List Customers

$customer->listCustomers([
    'perPage' => 5,
    'page' => 1
]); 

// Fetch Customer

$customer->fetchCustomer("email"); ;

// Update Customer

$customer->updateCustomer(array);

// Validate Customer

$customer->validateCustomer(array);

// Whitelist/Blacklist Customer

$customer->wnbCustomer(array);

```

## Plans

```php
// Create Plan

$plan->createPlan(array);

// Example 
$plan->createPlan(
    $fields = [

		'name' => "Monthly retainer",

		'interval' => "monthly", 
	
		'amount' => "500000"
    
    ]
);

// Fetch Plan

$plan->fetchPlan(idOrCode);

// List Plans

$plan->listPlans(perPage, Page);

// Update Plan

$plan->updatePlan(code, array);

```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
