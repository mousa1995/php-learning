<?php
$text = "PHP & Laravel tutorial";

$urlText = urlencode($text);
//PHP+%26+Laravel+tutorial

$text2 = urldecode($urlText);

var_dump($text === $text2); // true 
