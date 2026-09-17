<?php

$filename = 'not-found.txt';

$text = file_get_contents($filename, "./messages");

if ($text !== false) {
    echo $text;
} else {
    echo "file not found!";
};
