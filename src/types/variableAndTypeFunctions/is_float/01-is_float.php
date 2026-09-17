<?php
$price = 19.99;

print_r(is_float($price));

$price2 = 19;

echo "\n";

var_dump($price2);

// concise 
is_float(10.5);     // true
is_float(0.5);      // true
is_float(-10.25);   // true

is_float(10);       // false
is_float("10.5");   // false
is_float(true);     // false
is_float(null);     // false
is_float([]);       // false