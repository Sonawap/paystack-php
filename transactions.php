<?php
namespace Transaction\Transaction;
/**
 * Paystack - Use paystack apis
 * Version 1.0.
 *
 * @see https://github.com/Sonawap/paystack-php/ The payStackPhp GitHub project
 *
 * @author Sonawap - Paul Sola Moses - whatsapp - +234 70 6542 5688 - email: Paulsola79@gmail.com 
 * 
 * @Twitter - https://twitter.com/sonawap
 * @Intagram - https://instagram.com/sonawap
 * @facebook - https://facebook.com/paul.sola.986
 * 
 **/
require_once('config.php');
require_once('request/excute.php');

class transaction extends \Transaction\Transaction\Excute\excuteAction
{

	// Initialize a transaction from your backend
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
  	public function initializeTransaction($fields){
  		return $this->excutePost(INITIALIZE_TRANSACTION, $fields);
  	}

  	// All authorizations marked as reusable can be charged with this endpoint whenever you need to recieve payments.
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

  	public function chargeAuthorization($fields){
  		return $this->excutePost(CHARGE_AUTHORIZATION, $fields);
  	}

  	// It should be used to check if a card has enough funds based on a maximum range value. 
  	/*Body Params
	pass the params as an arguement for this method
	accepts array
	[
		'amount' => "", String
		'email' => "", String
		'authorization_code' => "", String
		'currency' => "", String default NGN

	]*/

  	public function checkAuthorization($fields){
  		return $this->excutePost(CHECK_AUTHORIZATION, $fields);
  	}

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

  	public function partial_debit($fields){
  		return $this->excutePost(PARTIAL_DEBIT, $fields);
  	}

  	// Total amount received on your account
  	/*Query Params
	pass the params as an arguement for this method
	accepts array
	[
		'perPage' => , integer
		'page' => , integer
		'status' => "", String
		'from' => "", Datetime  e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'to' => "", Datetime  e.g. 2016-09-24T00:00:05.000Z, 2016-09-21

	]*/
  	
  	public function transactionTotal(array $params = []){
  		return $this->excute(TOTAL_TRANSACTION, $params);
  	}

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
  	public function listTransaction(array $params = []){
  		return $this->excute(LIST_TRANSACTION, $params);
  	}

  	// Get details of a transaction carried out on your integration.
  	/*Path Params
	pass the params as an arguement for this method
	accepts array
	[
		'id' => , Integer

	]*/
  	public function fetchTransaction($id, array $params = []){
  		return $this->excute(FETCH_TRANSACTION.$id, $params);
  	}

  	// Confirm the status of a transaction

  	/*Path Params
	pass the params as an arguement for this method
	accepts array
	[
		'reference' => "", String

	]*/
  	public function verifyTransaction($reference, array $params = []){
  		return $this->excute(VERIFY_TRANSACTION.$reference, $params);
  	}

  	//// VTT = View Transaction Timeline
  	// View the timeline of a transaction
  	/*Path Params
	pass the params as an arguement for this method
	accepts array
	[
		'id_or_reference' => "", String

	]*/
  	public function VTT($idOrReference, array $params = []){
  		return $this->excute(VIEW_TRANSATION_TIMELINE.$idOrReference, $params);
  	}


	// List transactions carried out on your integration
  	/*Query Params
	pass the params as an arguement for this method
	accepts array
	[
		'perPage' => , integer
		'page' => , integer
		'customer' => , integer customer id
		'status' => "", String
		'from' => "", Datetime  e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'to' => "", Datetime  e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'currency' => "", String
		'amount' => , integer
		'settled' => , Integer
		'payment_page' => , integer

	]*/
  	public function exportTransactions(array $params = []){
  		return $this->excute(EXPORT_TRANSACTIONS, $params);
  	}

  
}

?>