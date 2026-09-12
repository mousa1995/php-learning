<?php
$expenses = [
    "food" => 100,
    "transport" => 250,
    "bills" => 80,
    "health" => 300
];

$totalExpenses = array_values($expenses);

var_dump(
    array_map(fn($item) => $item + $item / 5, $totalExpenses)
);
