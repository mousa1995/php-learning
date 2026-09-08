<?php

$users = [
    [
        "name" => "Mousa",
        "age" => 32,
    ],
    [
        "name" => "Ali",
        "age" => 25,
    ],
    [
        "name" => "John",
        "age" => 28,
    ],
];


echo $users[0]["name"] . "\n";
echo $users[1]["age"] . "\n";
echo $users[2]["name"] . "\n";

echo "\t \n";

foreach ($users as $user) {
    echo $user["name"] . "\n";
};
