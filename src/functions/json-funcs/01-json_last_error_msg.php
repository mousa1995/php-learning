<?php
$json = '{"name":"Mousa"';

$data = json_decode($json, false);

var_dump($data);

print_r(json_last_error_msg());
