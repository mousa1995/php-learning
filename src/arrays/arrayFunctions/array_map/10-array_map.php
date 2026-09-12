<?php
$expenses = [
    100,
    250,
    80,
    300,
    150
];

$fn = function ($item) {
    return ["amount" => $item, "is_expensive" => $item > 200 ? true : false];
};

$describe = array_map($fn, $expenses);

var_dump($describe);
