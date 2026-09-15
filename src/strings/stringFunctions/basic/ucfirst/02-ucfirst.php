<?php

$users = [
    "mousa",
    "ALI",
    "reza"
];

$changed = array_map(function ($name) {
    return ucfirst(strtolower($name));
}, $users);

print_r($changed);
