<?php
require_once('../../transactions.php');

use Transaction\Transaction\transaction as transaction;

$transaction = new transaction();

  	  	// Confirm the status of a transaction

  	/*Path Params
	pass the params as an arguement for this method
	accepts array
	[
		'reference' => "", String

    ]*/


/////////First Initialize a transaction

$result =  $transaction->initializeTransaction(
    $fields = [
        'email' => "customer@email.com",
        'amount' => "20000",    
    ]
);


/////////// response gotten as a json, so we have to convert it to php array
$init = json_decode($result);

///////// passing the reference gotten from the initialization of the transaction

$result =  $transaction->verifyTransaction($init->data->reference);

echo $result;