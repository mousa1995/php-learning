<?php
$user = [
    "name" => "Mousa",
    "profile" => [
        "email" => "mousa@example.com",
        "phone" => null,
        "age" => 30
    ]
];


try {
    $phone = array_key_exists("phone", $user["profile"]);
    var_dump($phone);
} catch (Exception $e) {
    echo "phone is null => $e";
}

var_dump($phone);
