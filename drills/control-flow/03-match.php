<?php

# match is a value making machine

// this returns integer
$value = 5;

$result = match ($value) {
    "5" => "string",
    5 => "integer",
};

echo $result;


// We can make several value with one match
#see below

$day = "Saturday";

$result = match ($day) {
    "Saturday", "Sunday" => "Weekend",
    default => "Weekday",
};

echo $result;

// another example 
$sportDay = "sunday";

$result = match ($sportDay) {
    "friday" => "football",
    "sunday" => "swimming",
    default => "tennis",
};

echo $result;
