<?php
$expenses = [
    ["title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"]
];

$describe = function ($item) {
    $taxer = function ($amount, $category) {
        if ($category === "food") {
            $amount = $amount + $amount / 10;
        }
        return $amount;
    };

    $expOrNot = function ($value) {
        if ($value < 100) {
            $value = "Low: $value";
        }
        if ($value >= 100 && $value <= 200) {
            $value = "Medium: $value";
        }
        if ($value > 200) {
            $value = "High: $value";
        }
        return $value;
    };

    return ["title" => $item["title"], "amount" => $taxer($item["amount"], $item["category"]), "category" => $item["category"], "level" => $expOrNot($item["amount"])];
};

var_dump(array_map($describe, $expenses));
