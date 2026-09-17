<?php

$date = new DateTime();

// example
echo $date->format("Y") . "\n";
echo $date->format("Y-m-d H:i:s");

// example 2
$date2 = new DateTime("2026-12-25");
echo $date->format("Y-m-d") . "\n";

// example 3

$date->modify("+1 day");
echo $date->format("Y-m-d") . "\n";

// a few examples 
$date->modify("+7 days");
$date->modify("+1 month");
$date->modify("+1 month");
$date->modify("+2 years");
$date->modify("+2 years");
$date->modify("-1 month");

// setDate to set a date 
// setDate(year, month, day)
$date->setDate(2026, 12, 25);

echo $date->format("Y-m-d");

// $date->setTime(18, 30, 0); to set Time -> hour minutes seconds
// setTime(hour, minute, second)
$date->setTime(18, 30, 0);

// diff() => fine difference of to dates
$start = new DateTime("2026-09-01");
$end = new DateTime("2026-09-17");
$diff = $start->diff($end);

// diff example 
$created = new DateTime("2026-09-01");
$today = new DateTime();

$diff = $created->diff($today);

// diff is a deltaInterval it means it can diff days…
echo $diff->days;

// We can see the differences of dates
// example 
$date1 = new DateTime("2026-09-10");
$date2 = new DateTime("2026-09-17");

if ($date1 < $date2) {
    echo "date1 is earlier";
}
