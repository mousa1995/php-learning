<?php
$expenses = [
    100,
    250,
    80,
    300
];

$expensesPlus = array_map(fn($expense) => $expense + 50, $expenses);

var_dump($expensesPlus);
