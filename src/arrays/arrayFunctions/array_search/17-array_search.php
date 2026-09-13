<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120
];


$key = array_search(300, $expenses);

var_dump($key);
