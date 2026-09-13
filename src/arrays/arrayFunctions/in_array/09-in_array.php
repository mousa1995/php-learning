<?php

$expense = [
    "title" => "Pizza",
    "category" => "food",
];

$allowedCategories = ["food", "transport", "bills", "health"];

$inAllowed = in_array($expense["category"], $allowedCategories);

var_dump($inAllowed);
