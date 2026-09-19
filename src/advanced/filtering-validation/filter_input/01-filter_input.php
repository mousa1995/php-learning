<?php

// my mistake!
//$eamil = filter_input($_GET, 'email', FILTER_VALIDATE_EMAIL);

$email = filter_input(
    INPUT_GET,
    'email',
    FILTER_VALIDATE_EMAIL
);

echo $email;
