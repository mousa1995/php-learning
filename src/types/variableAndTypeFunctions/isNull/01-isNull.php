<?php

// Checks if a value is Null or not 

// example
$name = null;

var_dump(is_null($name)); // true

// example 2 
$name = "Mousa";

var_dump(is_null($name)); // false

// concise
$a = 0;
$b = "";
$c = false;
$d = [];
$e = null;

is_null($a); // false
is_null($b); // false
is_null($c); // false
is_null($d); // false
is_null($e); // true
