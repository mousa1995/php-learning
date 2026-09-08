<?php

$user = [
    "name" => "Mousa",
    "age" => 32,
    "job" => "jobless :D",
];


echo $user["name"] . "\n";
echo $user["age"] . "\n";
echo $user["job"] . "\n";

$user["pc"] = "prodesk";

var_dump($user);
