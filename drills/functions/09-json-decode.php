<?php

//example of object decoding 
$json = '{"name":"Mousa","age":32}';

$data = json_decode($json);

echo $data->name;
###################################

//example of arr decoding
$a = ["apple", "banana", "orange"];

$data = json_decode($json, true);

echo $data[0];
##################################

// structure of json_decode
//json_decode($json, $associative = null, $depth = 512, $flags = 0)


//  !! important notes !!

// 1. json_decode() → JSON → PHP

// 2. without true → object

// 3. with true → associative array

// 4. invalid json → decode failure → null

// 5. json_last_error() , json_last_error_msg() → error handling 
