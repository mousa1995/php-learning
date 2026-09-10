<?php

http_response_code(201);
header("Content-Type: application/json");
$arr = [
    "message" => "yo yo",
    "id" => "1",
    "amount" => "40000"
];

echo json_encode($arr);
