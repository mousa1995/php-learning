<?php
$productsA = [
    "oil",
    "filter",
    "battery"
];

$productsB = [
    "spark_plug",
    "brake_pad",
    "tire"
];

$allProducts = array_merge($productsA, $productsB);

print_r($allProducts);
