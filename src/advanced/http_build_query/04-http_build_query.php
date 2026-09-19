<?php

$params = [
    "category" => "laptop",
    "page" => 2,
    "sort" => "price"
];

$query = http_build_query($params);

$url = "https://www.example.com?" . "$query";

echo $url;
