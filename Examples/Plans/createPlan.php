<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Plan;

$plan = new Plan();

    
$result =  $plan->createPlan(
    $fields = [

		'name' => "Monthly retainer",

		'interval' => "monthly", 
	
		'amount' => "500000"
    
    ]
);

echo $result;