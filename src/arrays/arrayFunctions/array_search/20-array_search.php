<?php
$expenses = [
    "food" => 150,
    "transport" => 80,
    "bills" => 300,
    "health" => 120,
    "education" => 300
];
$searchAmount = 120;

$catagory = [];

$target = array_search($searchAmount, $expenses);

//var_dump($target);

$catagory[0] = $target;

var_dump($catagory);
