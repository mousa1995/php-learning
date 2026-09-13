<?php
$products = [
    "oil" => 10,
    "filter" => 5,
    "spark_plug" => 8
];

$stock = [
    "brake_pad" => 12,
    "battery" => 4,
    "oil" => 20
];

$result = array_merge($products, $stock);

print_r($result);
