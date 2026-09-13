<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"],
    ["title" => "Burger",   "amount" => 180, "category" => "food"]
];


$plus90Foods = array_filter($expenses, function ($value) {
    if ($value["category"] === "food" && $value["amount"] > 90) return $value;
});

print_r($plus90Foods);
