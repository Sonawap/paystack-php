<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Plan;

$plan = new Plan();

    
$result =  $plan->updatePlan($code=67019,
    $fields = [

        'name' => "Monthly retainer (renamed)",
    
    ]
);

echo $result;