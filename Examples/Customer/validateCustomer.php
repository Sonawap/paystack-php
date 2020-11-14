<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();

// Update a customer's details on your integration
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
$result = $customer->validateCustomer('CUS_wl5r0v0k3uq9pxg', 
    $fields = [
        'country' => 'NG',
        'type' => '',
        'first_name' => '',
        'last_name' => '',
    ]
);

echo $result;
