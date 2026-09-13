<?php
$categories = [
    "food",
    "transport",
    "bills",
    "health",
    "education"
];

$index = array_search("education", $categories);

var_dump($index);
