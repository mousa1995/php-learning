<?php

try {

    $age = 15;

    if ($age < 18) {
        throw new Exception("You must be 18 or older");
    }
} catch (Exception $e) {
    echo "invalid age!";
}
