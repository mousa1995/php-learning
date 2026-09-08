<?php

$age = 25;
$hasTicket = true;

var_dump($age >= 18 && $hasTicket); // AND
var_dump($age < 18 || $hasTicket);  // OR
var_dump(!$hasTicket); //not
