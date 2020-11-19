<?php	
use Sonawap\Paystack\Transaction\Transaction;

require '../../vendor/autoload.php';

$transaction = new Transaction();
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
$result =  $transaction->listTransaction([
    'perPage' => 5,
    'page' => 2
]);

echo $result;