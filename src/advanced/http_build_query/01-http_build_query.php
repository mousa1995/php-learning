<?php

// $parameters
//      ↓
// ┌─────────────────────────┐
// │ "page"   => 2           │
// │ "search" => "php"       │
// │ "sort"   => "price"     │
// └─────────────────────────┘
//      ↓
// http_build_query()
//      ↓
// page=2&search=php&sort=price


$params = [
    "page" => 2,
    "search" => "php tutorial",
    "sort" => "price",
];

$query = http_build_query($params);

echo $query;
