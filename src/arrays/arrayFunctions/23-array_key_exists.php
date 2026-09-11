<?php
$product = [
    "name" => "Laptop",
    "price" => 1200,
    "stock" => 5,
    "discount" => null
];

$discount = array_key_exists("discount", $product);

var_dump($discount);
