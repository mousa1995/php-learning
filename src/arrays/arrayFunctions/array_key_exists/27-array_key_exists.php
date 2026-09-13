<?php
$data = [
    "user" => [
        "name" => "Mousa",
        "settings" => [
            "theme" => "dark",
            "language" => "fa"
        ]
    ]
];

$settingsHasLanguaage = array_key_exists("language", $data["user"]["settings"]);

var_dump($settingsHasLanguaage);
