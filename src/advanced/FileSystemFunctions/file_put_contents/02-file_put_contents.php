<?php

$path = __DIR__ . "/log.txt";
file_put_contents($path, "Application Started!\n");

$userLog = function ($user) use ($path) {
    file_put_contents($path, "$user logged\n", FILE_APPEND);
};

$userLog("Ali");
$userLog("mousa");
