<?php
$text = "Hello PHP";

$result = strtolower($text);

echo $result . "\n";


$username = "MoUsA_Developer";

$normalizeUserName = strtolower($username);
echo $normalizeUserName . "\n";


$normalizeYes = function ($yes) {
    return strtolower($yes);
};

$email = "  ADMIN@SITE.COM  ";

$normalizeEmail = function ($emailOrText) {
    $temp = trim($emailOrText);
    return strtolower($temp);
};

echo $normalizeEmail($email);
