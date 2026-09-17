<?php
// strtotime
// string => strtotime => Unix Timestamp

$time = date("Y, m , d") . "\n";

echo $time;

echo strtotime($time) . "\n";


// example
$timestamp = strtotime("2026-09-17");

echo $timestamp . "\n";

// example 2
$date = "2026-09-22";

$timestamp = strtotime($date);

echo $timestamp . "\n";

//example 3 
$tomorrow = strtotime("tomorrow");

echo $tomorrow . "\n";

// more examples ! 
// all below are valid 
strtotime("2026-01-01");
strtotime("tomorrow");
strtotime("yesterday");
strtotime("+7 days");
strtotime("-1 month");
