<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120
];


$values = array_values($expenses)[1];

var_dump($values);
