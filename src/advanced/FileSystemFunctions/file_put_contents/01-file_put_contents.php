<?php

$file = 'some random file';

$result = file_put_contents($file, "Hello PHP");

if ($result === false) {
    echo "Could not write to file.";
} else {
    echo "File written successfully.";
}
