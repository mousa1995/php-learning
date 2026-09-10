<?php

// Command to run sv
// PHP -S localhost:8000 -t src 

$name = $_GET["name"];
$age = $_GET["age"];


echo "hi $name\n\t";
echo "$name's age is : $age";
