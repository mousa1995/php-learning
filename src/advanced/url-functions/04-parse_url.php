<?php
$url = "https://api.example.com/users/25?include=expenses";

$host = parse_url($url, PHP_URL_HOST);

var_dump($host);
