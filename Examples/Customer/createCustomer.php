<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();

// Create a customer on your integration
/*Body Params
pass the params as an arguement for this method
accepts array
[
    'first_name' => , String
    'last_name' => "", String
    'phone' => "", String
    'metadata' => Object, accepts only json 

]*/
$result = $customer->createCustomer(
    $fields = [
        'first_name' => '',
        'last_name' => '',
        'email' => "customer@email.com"
    
    ]
);

echo $result;
