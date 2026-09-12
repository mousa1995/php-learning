<?php
$expenses = [100, 250, 80, 300, 150];

var_dump(array_map(function ($item) {
    if ($item < 100) {
        return "cheap";
    }
    if ($item >= 100 && $item <= 200) {
        return "normal";
    }
    if ($item > 200) {
        return "expensive";
    }
    echo "code shold not come here ! ";
}, $expenses));
