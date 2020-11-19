<?php
namespace Sonawap\Paystack\Transaction;

use Sonawap\Paystack\Transaction\Initiate\ExcuteAction;

/**
 * Paystack - Use paystack apis
 * Version 1.0.
 *
 * @see https://github.com/Sonawap/paystack-php/ The payStackPhp GitHub project
 *
 * @author Sonawap - Paul Sola Moses - whatsapp - +234 70 6542 5688 - email: Paulsola79@gmail.com 
 * 
 * @Twitter - https://twitter.com/sonawap
 * @Intagram - https://instagram.com/sonawap
 * @facebook - https://facebook.com/paul.sola.986
 * 
 **/
require 'config/config.php';
require 'config/urlPlans.php';
require(dirname(__DIR__).'../vendor/autoload.php');
require 'init/excute.php';

class Plan extends ExcuteAction
{

	public function createPlan($fields){
        return $this->excutePost(CREATE_PLAN, $fields);
    }

    public function listPlans(array $params = []){
        return $this->excute(LIST_PLANS, $params);
    }

    public function fetchPlan($idOrCode, array $params = []){
        return $this->excute(FETCH_PLAN.$idOrCode, $params);
    }

    public function updatePlan($code, $fields){
        return $this->excutePut(UPDATE_PLAN.$code, $fields);
    }
	
  
}

?>