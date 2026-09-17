<?php
echo time(); // Returns seconds NOT milliseconds from unit Epoch

$time = time();

echo gettype($time) . "\n"; //integer

$time2 = date("Y|m|d");

echo gettype($time2) . "\n"; //string

// example
$createdAt = time();

$expiresAt = time() + 1800;

if (time() > $expiresAt) {
    echo "Expired";
} else {
    echo "there is still time!";
}
