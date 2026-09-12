<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120,
    "education" => 200
];
$values = array_values($expenses);

var_dump($values[1] + $values[3]);
