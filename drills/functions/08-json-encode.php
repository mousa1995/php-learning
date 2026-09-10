<?php

$user = [
    "name" => "Mousa",
    "age" => 32
];

echo json_encode($user); //{"name":"Mousa","age":32} 


// 1. json_encode() → PHP value → JSON string

// 2. Indexed PHP array → JSON array

// 3. Associative PHP array → JSON object

// 4. json_encode() can handle nested arrays and objects 

// 5. on Success => string !   -------   on Failure => false


// json_encode(value, options, depth)
//               |        |      |
//               |        |      |  
//      value to be json  |      |
//                    the flags  |
//                       default = 512 

//        it can have several flags this way 
//                         ↓
// json_encode(          ↓            
//     $data,
//     JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
// );

// json_encode() converts PHP values into JSON.
// Arrays are converted directly, while objects expose their public properties by default.
// JsonSerializable allows objects to control their JSON output.
