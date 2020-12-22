<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Product;

$product = new Product();

    
$result =  $product->fetchProduct($id='67019');

echo $result;