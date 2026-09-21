<?php
$password = "hello123";

$hash = password_hash($password, PASSWORD_DEFAULT);

$ok = password_verify($password, $hash);

var_dump($ok);
