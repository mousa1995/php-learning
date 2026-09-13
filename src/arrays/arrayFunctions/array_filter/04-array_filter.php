<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"],
    ["title" => "Burger",   "amount" => 180, "category" => "food"],
    ["title" => "Bus",      "amount" => 120, "category" => "transport"]
];


$transportOrFoodPlus90 = array_filter($expenses, function ($value) {
    if ($value["amount"] > 90) {
        return $value["category"] === "food" || $value["category"] === "transport" ? $value : false;
    };
});

print_r($transportOrFoodPlus90);
count($transportOrFoodPlus90);
