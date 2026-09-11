<?php
$users = [
    "mousa" => [
        "name" => "Mousa",
        "email" => "mousa@example.com"
    ],
    "ali" => [
        "name" => "Ali",
        "phone" => "123456"
    ]
];

$mousaHasPhone = array_key_exists("phone", $users["mousa"]);

var_dump($mousaHasPhone);
