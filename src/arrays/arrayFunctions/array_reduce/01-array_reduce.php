<?php
$expenses = [
    100,
    250,
    80,
    300
];


$atLeast = array_reduce($expenses, function ($total, $item) {
    $item >= 200 ? $total = $total + 1 : $total;
    return $total;
}, 0);

var_dump($atLeast);
