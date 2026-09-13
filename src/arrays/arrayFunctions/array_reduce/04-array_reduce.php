<?php
$expenses = [
    ["amount" => 100, "category" => "food"],
    ["amount" => 250, "category" => "transport"],
    ["amount" => 80,  "category" => "food"],
    ["amount" => 300, "category" => "bills"],
    ["amount" => 150, "category" => "food"],
];

$totalFoodExpense = array_reduce($expenses, function ($carry, $item) {
    $item["category"] === "food" && $carry = $item["amount"] + $carry;
    return $carry;
}, 0);

print_r($totalFoodExpense);
