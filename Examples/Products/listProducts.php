<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Product;

$product = new Product();

    
$result =  $product->listProducts();

echo $result;