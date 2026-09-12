<?php
$expenses = [
    100,
    250,
    80,
    300
];

var_dump(array_map(fn($expense) => "$$expense", $expenses));
