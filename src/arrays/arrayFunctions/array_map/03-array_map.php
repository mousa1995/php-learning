<?php
$names = ["mousa", "ali", "sara", "reza"];

$capitalNames = array_map(fn($name) => ucfirst($name), $names);

var_dump($capitalNames);
