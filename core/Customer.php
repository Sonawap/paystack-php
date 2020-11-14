<?php
namespace Sonawap\Paystack\Customer;

use Sonawap\Paystack\Transaction\Initiate\ExcuteAction;

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
require 'config/config.php';
require 'config/urlCustomer.php';
require(dirname(__DIR__).'../vendor/autoload.php');
require 'init/excute.php';

class Customer extends ExcuteAction
{

	// Create a customer on your integration
	/*Body Params
	pass the params as an arguement for this method
	accepts array
	[
		'first_name' => "", String
		'last_name' => "", String
		'phone' => "", String
		'metadata' => Object, accepts only json 

	]*/
    public function createCustomer($fields){
        return $this->excutePost(CREATE_CUSTOMER, $fields);
    }

    // List customers available on your integration.
	/*Query Params
	pass the params as an arguement for this method
	accepts array
	[
		'perPage' => , Integer
		'page' => , Integer
		'from' => , Datetime e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'to' => Datetime e.g. 2016-09-24T00:00:05.000Z, 2016-09-21

	]*/

    public function listCustomers(array $params = []){
        return $this->excute(LIST_CUSTOMER, $params);
    }

    // Get details of a customer on your integration.
	/*Query Params
	pass the params as an arguement for this method
	accepts array
	[
		'perPage' => , Integer
		'page' => , Integer
		'from' => , Datetime e.g. 2016-09-24T00:00:05.000Z, 2016-09-21
		'to' => Datetime e.g. 2016-09-24T00:00:05.000Z, 2016-09-21

	]*/

    public function fetchCustomer($emailOrCode, array $params = []){
        return $this->excute(FETCH_CUSTOMER.$emailOrCode, $params);
    }

    // // Update a customer's details on your integration
    /*Params
	pass the params as an arguement for this method
	accepts array
	[
		'customer_code' => "", String
		'first_name' => "", String
		'last_name' => "", String
		'phone' => "", String
		'metadata' => Object, accepts only json 

	]*/
    public function updateCustomer($code, $fields){
        return $this->excutePut(UPDATE_CUSTOMER.$code, $fields);
    }

    /*Params
	Validate a customer's identity
	accepts array
	[
		'customer_code' => "", String
		'country_code' => "", String
		'first_name' => "", String
		'last_name' => "", String
		'type' => "", String
		'value' =>"" ,String 
		'country' => ""String 

    ]*/
    public function validateCustomer($code, $fields){
        return $this->excutePost("https://api.paystack.co/customer/".$code."/identification", $fields);
    }

    // // Whitelist or blacklist a customer on your integration
    /*Params
	pass the params as an arguement for this method
	accepts array
	[
		'customer_code' => "", String
		'risk_action' => "", String [ default, allow, deny ]. 

	]*/
    public function wnbCustomer($fields){
        return $this->excutePost(WNB, $fields);
    }

     // // Deactivate an authorization when the card needs to be forgotten
    /*Body Params
	pass the params as an arguement for this method
	accepts array
	[
		'authorization_code' => "", String

	]*/
    public function deAuth($fields){
        return $this->excutePost(DEAUTH, $fields);
    }

    
  
}

?>