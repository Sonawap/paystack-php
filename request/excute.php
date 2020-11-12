<?php

require 'initialize.php';

// use initializeAction;
/**
 * 
  excute a connect to paystack api
 */
class excuteAction extends initializeAction\initializeAction
{
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
  		return $result;
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

$excute = new excuteAction();