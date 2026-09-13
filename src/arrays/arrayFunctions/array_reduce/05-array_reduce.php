<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"],
    ["title" => "Burger",   "amount" => 180, "category" => "food"],
    ["title" => "Bus",      "amount" => 120, "category" => "transport"],
    ["title" => "Dinner",   "amount" => 220, "category" => "food"]
];

$re_struct = array_reduce($expenses, function ($carry, $item) {
    $carry["total"] = $carry["total"] + $item["amount"];
    $item["category"] === "food" ? $carry["food_total"] = $carry["food_total"] + $item["amount"] : $carry["food_total"];
    if ($item["amount"] >= 200) {
        $carry["expensive_count"] = $carry["expensive_count"] + 1;
    }
    return $carry;
}, ["total" => 0, "food_total" => 0, "expensive_count" => 0]);

print_r($re_struct);
