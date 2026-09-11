<?php
$data = [
    "users" => [
        "mousa" => [
            "settings" => [
                "theme" => "dark",
                "language" => "fa"
            ]
        ],
        "ali" => [
            "settings" => [
                "theme" => "light"
            ]
        ]
    ]
];

$aliData = array_key_exists("language", $data["users"]["ali"]["settings"]);
$mousaData = array_key_exists("language", $data["users"]["mousa"]["settings"]);

var_dump("ali: $aliData");
var_dump("mousa: $mousaData");
