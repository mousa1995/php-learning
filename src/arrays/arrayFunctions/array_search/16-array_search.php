<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120
];


// find the value with amount 300

$_300 = array_search(300, $expenses);

var_dump($_300);
