<h1>Sonawap Paystack PHP library</h1>
<h3>Helps you manage and use Packstack's api</h3>

<p>To Start run</p>

<h3>Composer require sonawap/paystack</h3>

<p>Go to vendor > sonawap > paystack > core > config > config.php </p>

define your paystack key

<p>Include the autoload file</p>

<?php
require 'vendor/autoload.php';

<p>Use the Class</p>

use Sonawap\Paystack\Transaction\Transaction;
use Sonawap\Paystack\Customer\Customer;

<p>Create a new instance of the class</p>

$transaction = new Transaction();
$customer = new Customer();

<p>Now you have access to all the methods in the classes, see docs or example for details</p>


/// initialize a transaction 
$transaction->initializeTransaction($fields) //$fields as to be array

<p>Example</p>
$transaction->initializeTransaction(
    $fields = [
        'email' => "customer@email.com",
        'amount' => "20000",
    ]
);

/// Charge Authorization
$transaction->chargeAuthorization($fields) //$field as to be array
<p>Example</p>
$transaction->chargeAuthorization(
    $fields = [
        'email' => "customer@email.com",
    	'amount' => "20000",
    	"authorization_code" => "AUTH_72btv547",
    ]
);

/// Charge Authorization
$transaction->checkAuthorization($fields) //$field as to be array
<p>Example</p>
$transaction->checkAuthorization(
    $fields = [
        'email' => "customer@email.com",
    	'amount' => "20000",
    	"authorization_code" => "AUTH_72btv547",
    ]
);



