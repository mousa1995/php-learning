<?php

//              Difference!
// is_file doesn't check for directory !
// but 
// file_exists does check for directories and files



$path = __DIR__ . "/../file_get_contents/config.txt";
$file = is_file($path);

var_dump($file);
