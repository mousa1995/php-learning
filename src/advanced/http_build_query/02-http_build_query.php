<?php

// https://api.example.com/expenses?category=food&month=9&page=2

$params = [
    "page" => 2,
    "category" => "food",
    "month" => 9,
];

$query = http_build_query($params);

$url = "https://api.example.com/expenses?" . $query;

echo $url;
