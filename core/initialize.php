<?php
namespace Sonawap\Paystack\Transaction\Initiate;
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
/**
 * 
  initiate a connect to paystack api
 */
class InitializeAction
{
	protected function initialize($url){
  		$curl = curl_init();
	      curl_setopt_array($curl, array(
	        CURLOPT_URL => $url,
	        CURLOPT_RETURNTRANSFER => true,
	        CURLOPT_ENCODING => "",
	        CURLOPT_MAXREDIRS => 10,
	        CURLOPT_TIMEOUT => 30,
	        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	        CURLOPT_CUSTOMREQUEST => "GET",
	        CURLOPT_HTTPHEADER => array(
		        "Authorization: Bearer ".SECRET,
		        "Cache-Control: no-cache",
	        ),
	    ));

	    return $curl;
  	}

  	protected function postInitialize($url, $fields){
  		$fields_string = http_build_query($fields);
	  	$ch = curl_init();
	  	curl_setopt($ch,CURLOPT_URL, $url);
	  	curl_setopt($ch,CURLOPT_POST, true);
	  	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	  	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    "Authorization: Bearer ".SECRET,
		    "Cache-Control: no-cache",
	  	));  
	  	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

	  	return $ch;
  	}
}

// $initializeAction = new initializeAction();
