<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Transaction;

$transaction = new transaction();

/*Body Params
	pass the params as an arguement for this method
	accepts array
	[
		'amount' => , Integer
		'email' => "", String
		'currency' => "", String default NGN
		'reference' => "", String
		'callback_url' => "", String eg https://example.com/
		'plan' => "", String
		'invoice_limit' => , integer
		'split_code' => "", String
		'subaccount' => "", String
		'transaction_charge' => , Integer 
		'bearer' => "", defaults to account
		'metadata' => String, accepts only json 
		'channels' => "", String

    ]*/
    
$result =  $transaction->initializeTransaction(
    $fields = [

        'email' => "customer@email.com",
    
        'amount' => "20000",
    
    ]
);

echo $result;