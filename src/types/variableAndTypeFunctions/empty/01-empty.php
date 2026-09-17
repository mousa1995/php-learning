<?php
//Empty is equal to => !isset($var) || $var == false 


//example
$user = [
    "profile" => [
        "name" => "Mousa"
    ]
];

if (empty($user["profile"]["email"])) {
    echo "Email is empty";
} //  => email is empty 

// note "" is empty
// " " is NOT empty! 

// example 2
