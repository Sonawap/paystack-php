<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Transaction;

$transaction = new transaction();
	// Get details of a transaction carried out on your integration.
  	/*Path Params
	pass the params as an arguement for this method
	accepts array
	[
		'id' => , Integer

	]*/
$result =  $transaction->fetchTransaction(882736101); /// transaction id eg "882736101"

echo $result;