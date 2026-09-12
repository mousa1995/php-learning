<?php
$prices = [100, 250, 80, 300];

$taxPrices = array_map(fn($item) => $item + $item / 10, $prices);

var_dump($taxPrices);
