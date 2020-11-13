<?php
require_once('../../transactions.php');

use Transaction\Transaction\transaction as transaction;

$transaction = new transaction();

/*Body Params
	pass the params as an arguement for this method
	accepts array
	[
		'amount' => "", String
		'email' => "", String
		'authorization_code' => "", String
		'currency' => "", String default NGN
		'reference' => "", String
		'callback_url' => "", String eg https://example.com/
		'subaccount' => "", String
		'queue' => "", Boolean
		'transaction_charge' => , Integer 
		'bearer' => "", defaults to account
		'metadata' => String, accepts only json 
		'channels' => "", String

	]*/
    
$result =  $transaction->chargeAuthorization(
    $fields = [

        'email' => "customer@email.com",

    	'amount' => "20000",

    	"authorization_code" => "AUTH_72btv547",
    
    ]
);

echo $result;