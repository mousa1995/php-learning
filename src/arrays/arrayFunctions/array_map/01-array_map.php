<?php
$numbers = [1, 2, 3];

$result = array_map(
    fn($number) => $number * 2,
    $numbers
);

var_dump($result);
