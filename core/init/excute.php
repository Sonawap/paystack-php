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
// use initializeAction;
/**
 * 
  excute a connect to paystack api
 */
require(dirname(__DIR__).'../../vendor/autoload.php');

require 'initialize.php';

class ExcuteAction extends InitializeAction
{
	protected $_attributes = [];
	protected function excute($url, array $params){
		
  		$curl = $this->initialize($url.$this->get($params));
  		$response = curl_exec($curl);
      	$err = curl_error($curl);
      	curl_close($curl);
      	if ($err) {
	        return "cURL Error #:" . $err;
	    } else {
	        return $response;
	    }
  	}

  	protected function excutePost($url, $fields){
  		$ch = $this->postInitialize($url, $fields);
		$result = curl_exec($ch);
		$err = curl_error($ch);
		if ($err) {
	        return "cURL Error #:" . $err;
	    } else {
	        return $result;
	    }
	  }
	  
	protected function excutePut($url, $fields){
		$ch = $this->putInitialize($url, $fields);
		$result = curl_exec($ch);
		$err = curl_error($ch);
		if ($err) {
	        return "cURL Error #:" . $err;
	    } else {
	        return $result;
	    }
	}

  	protected function checkParams(array $params){
  		if(is_array($params))
            return $this->_attributes = $params;
        else{
            return $this->_attributes = json_decode(json_encode($params), true);
        }
  	}

  	protected function get(array $params){
  		$r = '';
  		foreach($this->checkParams($params) as $x => $x_value) {
		    $r .= $x . "=" . $x_value."&";
		}
		if (empty($params)) {
			return null;
		}else{
			return "?".$r;
		}
  	}
}

// $excute = new excuteAction();

?>