<?php
$username = "    Mousa    ";



$test = trim($username);
echo ($username . " afther trim: $test \n");

$name = "     Ali     ";

$trimAli = trim($name);

if (strlen($trimAli) < 3) {
    echo "invalid \n";
} else {
    echo "valid !\n ";
}


$email = "     mousa@example.com     ";

$trimEmail = trim($email);

echo strlen($email) - strlen($trimEmail);


$message = "      I am learning PHP      ";

$trimMessage = trim($message);

if (strlen($trimMessage) > 20) {
    echo "Message too long \n";
} else {
    echo "Message accepted \n";
}
