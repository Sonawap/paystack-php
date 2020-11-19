<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Plan;

$plan = new Plan();

    
$result =  $plan->listPlans();

echo $result;