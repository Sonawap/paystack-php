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
require 'config/urlProduct.php';
require(dirname(__DIR__).'../vendor/autoload.php');
require 'init/excute.php';

class Product extends ExcuteAction
{
    // Create a product on your integration


	public function createProduct($fields){
        return $this->excutePost(CREATE_PRODUCT, $fields);
    }

    // List products available on your integration.

    public function listProducts(array $params = []){
        return $this->excute(LIST_PRODUCTS, $params);
    }

    // Get details of a product on your integration.

    public function fetchProduct($idOrCode, array $params = []){
        return $this->excute(FETCH_PRODUCT.$idOrCode, $params);
    }

    // Update a product details on your integration

    public function updateProduct($code, $fields){
        return $this->excutePut(UPDATE_PRODUCT.$code, $fields);
    }
    
  
}

?>