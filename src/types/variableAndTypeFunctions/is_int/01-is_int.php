<?php
$age = 25;

var_dump(is_int($age));

$ag2 = "25";

print_r($ag2);

$num = 100.0;
$numIsInt = is_int($num);

echo "\n100.0 is_int: $numIsInt \n";
var_dump(is_int($num));

// concise 
is_int(0);        // true
is_int(-10);      // true
is_int(999999);   // true

is_int(10.5);     // false
is_int("10");     // false
is_int("0");      // false
is_int(false);    // false
is_int(null);     // false
is_int([]);       // false