<?php
$data = [
    "users" => [
        "mousa" => [
            "name" => "Mousa",
            "settings" => [
                "theme" => "dark"
            ]
        ],
        "ali" => [
            "name" => "Ali",
            "settings" => [
                "theme" => "light",
                "language" => "en"
            ]
        ]
    ]
];

$hasORNot = array_key_exists("language", $data["users"]["ali"]["settings"]);

var_dump($hasORNot);
