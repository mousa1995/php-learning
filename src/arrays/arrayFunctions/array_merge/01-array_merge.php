<?php
$a = [
    "name" => "Mousa",
    "age" => 30
];

$b = [
    "city" => "Madrid",
    "job" => "Developer"
];

$result = array_merge($a, $b);

print_r($result);
