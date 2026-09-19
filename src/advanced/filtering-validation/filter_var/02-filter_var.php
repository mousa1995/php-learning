<?php
$email = "mousa@example.com";

$result = filter_var($email, FILTER_VALIDATE_EMAIL);

var_dump($result);
