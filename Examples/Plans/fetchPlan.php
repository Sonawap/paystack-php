<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Plan;

$plan = new Plan();

    
$result =  $plan->fetchPlan($id='67019');

echo $result;