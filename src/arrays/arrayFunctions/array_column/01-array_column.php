<?php
$users = [
    [
        "id" => 101,
        "name" => "Ali",
        "role" => "admin"
    ],
    [
        "id" => 102,
        "name" => "Mousa",
        "role" => "user"
    ],
    [
        "id" => 103,
        "name" => "Reza",
        "role" => "user"
    ]
];

$userNames = array_column($users, "name", "id");

print_r($userNames);
