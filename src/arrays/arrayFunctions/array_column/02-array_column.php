<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"]
];

$titles = array_column($expenses, "title");

print_r($titles);
