<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"],
    ["title" => "Burger",   "amount" => 180, "category" => "food"],
    ["title" => "Bus",      "amount" => 120, "category" => "transport"]
];

$filtered = array_filter($expenses, function ($value) {
    return $value["category"] === "food" || $value["amount"] >= 250;
});

print_r($filtered);
