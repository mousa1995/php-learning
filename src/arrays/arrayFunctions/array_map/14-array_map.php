<?php
$expenses = [
    ["title" => "Pizza", "amount" => 100, "category" => "food"],
    ["title" => "Taxi", "amount" => 250, "category" => "transport"],
    ["title" => "Coffee", "amount" => 80, "category" => "food"],
    ["title" => "Internet", "amount" => 300, "category" => "bills"]
];

$describe = function ($item) {
    return [["title" => $item["title"],    "amount" => $item["amount"], "is_expensive" => $item["amount"] > 200]];
};

var_dump(array_map($describe, $expenses));
