<?php

$path = __DIR__ . "/../file_get_contents/config.txt";


$bool = file_exists($path);

var_dump($bool);
