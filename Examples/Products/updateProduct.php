<?php
require '../../vendor/autoload.php';

use Sonawap\Paystack\Transaction\Product;

$product = new Product();

    
$result =  $product->updateProduct($code=67019,
$fields = [

    'description' => "Product Six Description",

    'name' => "Product Six",

    'price' => 500000,

    'currency' => "USD",

    'limited' => false,

    'quantity' => 100,

  ]
);

echo $result;