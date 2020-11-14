<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Transaction;

$transaction = new transaction();

  	// Retrieve part of a payment from a customer.
	/*Body Params
	pass the params as an arguement for this method
	accepts array
	[
		'amount' => "", String
		'email' => "", String
		'authorization' => "", String
		'currency' => "", String default NGN
		'reference' => "", String
		'at_least' => "", String Minimum amount to charge

	]*/
    
$result =  $transaction->partial_debit(
    $fields = [

        'authorization' => "AUTH_72btv547",

        'currency' => "NGN",

        'amount' => "20000",
    
    ]
);

echo $result;