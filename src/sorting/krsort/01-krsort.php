<?php
$expenses = [
    "food" => 450,
    "transport" => 120,
    "bills" => 800,
    "health" => 250,
    "education" => 600
];

krsort($expenses);

print_r($expenses);
