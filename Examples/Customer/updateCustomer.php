<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();

// Update a customer's details on your integration
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
$result = $customer->updateCustomer('CUS_wl5r0v0k3uq9pxg', 
    $fields = [
        'phone' => '',
        'first_name' => '',
        'last_name' => '',
    ]
);

echo $result;
