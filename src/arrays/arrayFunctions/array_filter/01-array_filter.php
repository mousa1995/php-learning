<?php
$expenses = [120, 80, 350, 200, 90];

$plus100 = array_filter($expenses, function ($value) {
    return $value > 100;
});

print_r($plus100);
