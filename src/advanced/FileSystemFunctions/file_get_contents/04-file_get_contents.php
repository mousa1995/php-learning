<?php
$path = __DIR__ . "/users.txt";

$users = file_get_contents($path);

echo $users;
