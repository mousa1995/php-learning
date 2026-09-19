<?php

// nested array !

$params = [
    "page" => 2,
    "filter" => [
        "category" => "food",
        "min" => 100
    ]
];

$url = http_build_query($params);

echo $url;
