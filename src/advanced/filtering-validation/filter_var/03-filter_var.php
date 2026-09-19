<?php
$email = "hello";

$result = filter_var($email, FILTER_VALIDATE_EMAIL);

var_dump($result); //false
