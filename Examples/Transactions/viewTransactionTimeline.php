<?php
require_once('../../transactions.php');

use Transaction\Transaction\transaction as transaction;

$transaction = new transaction();
	// Get details of a transaction carried out on your integration.
  	/*Path Params
	pass the params as an arguement for this method
	accepts array
	[
		'id' => , Integer

	]*/
$result =  $transaction->VTT(882736101); /// transaction id e.g "882736101" or transaction reference e.g "no9w5bg2zn"

echo $result;