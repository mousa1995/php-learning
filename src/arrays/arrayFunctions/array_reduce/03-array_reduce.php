<?php
$expenses = [
    100,
    250,
    80,
    300,
    150,
    400
];

$total = array_reduce($expenses, function ($carry, $item) {
    return $item >= 150 ? $carry = $carry + $item : $carry;
}, 0);

print_r($total);
