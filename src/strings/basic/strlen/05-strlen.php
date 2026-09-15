<?php

$username = "developer";

$validation = function ($str) {
    if (strlen($str) < 5 || strlen($str) > 12) {
        return "invlaid";
    }
    return "valid";
};

print_r($validation("test"));
