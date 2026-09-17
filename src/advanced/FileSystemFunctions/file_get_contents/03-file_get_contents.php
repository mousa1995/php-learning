<?php
// $path = "./src/advanced/FileSystemFunctions/file_get_contents/config.txt";
$path = __DIR__ . "/config.txt";

$fileContent = file_get_contents($path);

if ($fileContent !== false) {
    echo $fileContent;
} else {
    echo "Could not load config. \n";
}
