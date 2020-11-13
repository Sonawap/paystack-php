<?php
require_once('../../core/transactions.php');

use Transaction\transaction as transaction;

$transaction = new transaction();
	// List transactions carried out on your integration
  	/*Query Params
	pass the params as an arguement for this method
	accepts array
	[
		'perPage' => , integer
		'page' => , integer
		'customer' => "", integer customer id
		'status' => "", String
		'from' => "", Datetime  e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'to' => "", Datetime  e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'amount' => , integer

	]*/
$result =  $transaction->transactionTotal([
    'perPage' => 5,
    'page' => 1
]); 

echo $result;