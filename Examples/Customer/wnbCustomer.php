<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();
// Whitelist or blacklist a customer on your integration
/*Params
pass the params as an arguement for this method
accepts array
[
    'customer_code' => "", String
    'risk_action' => "", String [ default, allow, deny ]. 

]*/

$result = $customer->wnbCustomer( 
    $fields = [
        'customer' => '',
        'risk_action' => '', 
    ]
);

echo $result;
