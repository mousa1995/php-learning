<?php
$date = new DateTimeImmutable("2026-09-17");

//$date->modify("+1 day");

echo $date->format("Y-m-d");


// Example 
// in immutable the initial obj is untouched
$date = new DateTime("2026-09-17");

$tomorrow = $date->modify("+1 day");

echo $date->format("Y-m-d");
echo $tomorrow->format("Y-m-d");
