<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120,
    "education" => 300
];


$keyWithValue300 = array_search(300, $expenses);


var_dump($keyWithValue300);
