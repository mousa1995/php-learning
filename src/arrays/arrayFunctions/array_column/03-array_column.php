<?php

$users = [
    ["id" => 101, "name" => "Ali",   "role" => "admin"],
    ["id" => 102, "name" => "Mousa", "role" => "user"],
    ["id" => 103, "name" => "Reza",  "role" => "user"],
    ["id" => 104, "name" => "Sara",  "role" => "admin"]
];


$names = array_column($users, "name", "id");

print_r($names);
