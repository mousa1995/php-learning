<?php
$a = 100;
$b = 10.5;
$c = "100";
$d = "10.5";

var_dump(is_numeric($a)); //true
var_dump(is_numeric($b)); //true
var_dump(is_numeric($c)); //true
var_dump(is_numeric($d)); //true

is_numeric(123);       // true
is_numeric(12.5);      // true
is_numeric(-50);       // true
is_numeric("123");     // true
is_numeric("12.5");    // true
is_numeric("-50");     // true

// IMPORTANT !
is_numeric("1e5");     // true

// falsies
is_numeric("PHP");      // false
is_numeric("12 PHP");   // false
is_numeric("");         // false
is_numeric(null);       // false
is_numeric(true);       // false
is_numeric([]);         // false
