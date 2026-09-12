<?php
$expenses = [
    100,
    250,
    80,
    300
];

$func  = function ($expense) {
    if ($expense < 200) {
        $expense = $expense + 50;
        return $expense;
    }
    return $expense;
};

$expensesPlus = array_map($func, $expenses);

var_dump($expensesPlus);
