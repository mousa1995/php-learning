<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"],
    ["title" => "Burger",   "amount" => 180, "category" => "food"],
    ["title" => "Bus",      "amount" => 120, "category" => "transport"]
];

$foodOrTransportPlus100 = array_filter($expenses, function ($item) {
    return $item["amount"] > 100 &&
        ($item["category"] === "food" || $item["category"] === "transport");
});

print_r($foodOrTransportPlus100);
