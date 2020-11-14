<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Customer\Customer;

$customer = new Customer();
// // Deactivate an authorization when the card needs to be forgotten
/*Body Params
pass the params as an arguement for this method
accepts array
[
    'authorization_code' => "", String

]*/

$result = $customer->deAuth( 
    $fields = [
        'email' => 'email',
    ]
);

echo $result;
