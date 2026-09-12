<?php
$expense = [
    "title" => "Pizza",
    "amount" => 250,
    "category" => "food",
    "date" => "2026-09-12"
];

$values = array_values($expense);

var_dump($values);
