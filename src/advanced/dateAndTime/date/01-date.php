<?php

echo date("y-m-d") . "\n";
echo date("y-m-D") . "\n";
echo date("y-M-D") . "\n";

date("Y"); //for digit year
date("m"); // two month digit
date("d"); // Number of the day of month => 01 , 15 , 22 , …
echo date("d-y-m H-i-s") . "\n";

echo date("h i s") . "\n";

// with timestamp
$timestamp = 0;

echo date("Y-m-d", $timestamp);
