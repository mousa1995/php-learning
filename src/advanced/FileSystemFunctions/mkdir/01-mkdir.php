<?php
$path = "somting";

$result = mkdir($path);

if ($result === true) {
    echo "Directory created.";
} else {
    echo "Could not create directory.";
}
//-------------------------
mkdir("logs");
mkdir("logs/2026");
mkdir("logs/2026/september");
//these three
// are equal to 
mkdir("logs/2026/september", 0777, true);
