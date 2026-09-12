<?php
$expenses = [
    100,
    250,
    80,
    300,
    150
];

var_dump(
    array_map(function ($item) {
        if ($item < 100) {
            $item = "Low: $item";
        }
        if ($item >= 100 && $item <= 200) {
            $item = "Medium: $item";
        }
        if ($item > 200) {
            $item = "High: $item";
        }
        return $item;
    }, $expenses)
);
