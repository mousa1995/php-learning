<?php
$expenses = [100, 250, 80, 300];


var_dump(array_map(function ($item) {
    return ["amount" => $item, "double" => $item * 2];
}, $expenses));
