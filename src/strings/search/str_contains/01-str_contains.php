<?php
$messages = [
    "Hello Mousa",
    "Learn PHP",
    "Good morning",
    "PHP is powerful"
];

$containsPHP = array_filter($messages, function ($value) {
    return str_contains(strtolower($value), "php");
});

print_r($containsPHP);
