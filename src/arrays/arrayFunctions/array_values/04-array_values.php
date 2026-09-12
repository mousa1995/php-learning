<?php
$products = [
    "laptop" => 1200,
    "mouse" => 50,
    "keyboard" => 80,
    "monitor" => 300
];

$prices = array_values($products);
var_dump($prices[count($prices) - 1]);
