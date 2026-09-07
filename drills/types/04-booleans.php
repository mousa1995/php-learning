<?php

// Logs 1 
$isLoggedIn = true;
echo $isLoggedIn;

// does't log anything !
$isAdmin = false;
echo $isAdmin;


//var_dump() is better to see true and false 
$hasPermission = true;

var_dump($isLoggedIn, $isAdmin, $hasPermission);
