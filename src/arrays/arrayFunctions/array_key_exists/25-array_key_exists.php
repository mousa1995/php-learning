<?php
$user = [
    "name" => "Mousa",
    "profile" => [
        "email" => "mousa@example.com",
        "phone" => "123456"
    ]
];

$phone = array_key_exists("phone", $user["profile"]);

var_dump($phone);
