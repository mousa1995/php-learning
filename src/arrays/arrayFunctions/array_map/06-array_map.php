<?php
$expenses = [
    100,
    250,
    80,
    300,
    150
];

$decider = function ($expense) {
    if ($expense < 100) {
        $expense = $expense + 20;
    }

    if ($expense > 100 && $expense < 200) {
        $expense = $expense + 10;
    }

    return $expense;
};

var_dump(array_map($decider, $expenses));
