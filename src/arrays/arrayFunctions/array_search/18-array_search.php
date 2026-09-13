<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120
];

$keyOfValue120 = array_search(120, $expenses);

var_dump($keyOfValue120);
