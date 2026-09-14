<?php
$values = [
    10,
    "10",
    20,
    "20",
    10,
    "30",
    30,
    "40",
    20
];

print_r(array_unique($values));

echo "num";

print_r(array_unique($values, SORT_NUMERIC));
