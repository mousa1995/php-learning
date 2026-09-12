<?php
$expenses = [
    ["title" => "Pizza", "amount" => 100],
    ["title" => "Taxi", "amount" => 250],
    ["title" => "Coffee", "amount" => 80],
    ["title" => "Internet", "amount" => 300]
];

$taxer = function ($item) {
    return ["title" => $item['title'], "amount_with_tax" => $item['amount'] + $item['amount'] / 10];
};

var_dump(array_map($taxer, $expenses));
