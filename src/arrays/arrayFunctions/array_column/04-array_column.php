<?php

$expenses = [
    ["id" => 101, "title" => "Pizza",    "amount" => 100, "category" => "food"],
    ["id" => 102, "title" => "Taxi",     "amount" => 250, "category" => "transport"],
    ["id" => 103, "title" => "Internet", "amount" => 300, "category" => "bills"],
    ["id" => 104, "title" => "Coffee",   "amount" => 80,  "category" => "food"],
    ["id" => 105, "title" => "Bus",      "amount" => 120, "category" => "transport"],
];

$wierd = array_column($expenses, "amount", "id");

print_r($wierd);
