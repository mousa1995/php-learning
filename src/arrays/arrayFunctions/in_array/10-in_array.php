<?php

$expenses = [
    "food",
    "transport",
    "bills",
    "health"
];

$categoeyExists = in_array("education", $expenses);

var_dump($categoeyExists);
