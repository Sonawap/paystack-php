<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();

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
$result = $customer->listCustomers();

echo $result;
