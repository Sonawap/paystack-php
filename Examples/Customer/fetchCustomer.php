<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();

// Get details of a customer on your integration.
/*Path Params
pass the params as an arguement for this method
accepts array
[
    'email_or_code' => , String


]*/
$result = $customer->fetchCustomer("email"); 

echo $result;
