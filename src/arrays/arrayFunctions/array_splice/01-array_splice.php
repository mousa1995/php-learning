<?php
$products = [
    "oil",
    "filter",
    "battery",
    "spark_plug",
    "brake_pad"
];


array_splice($products, 1, 3, ["hi", "bye", "bye bye"]);

print_r($products);
