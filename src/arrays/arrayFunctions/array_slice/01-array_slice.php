<?php

$expenses = [
    100,
    250,
    80,
    300,
    150,
    400
];

$slice = array_slice($expenses, 1, 3);

print_r($slice);
