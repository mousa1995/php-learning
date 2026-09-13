<?php
$expenses = [
    100,
    250,
    80,
    300,
    150
];

$totalExpense = array_reduce($expenses, function ($carry, $item) {
    return $item > 100 ? $carry = $carry + $item : $carry;
}, 0);

print_r($totalExpense);
