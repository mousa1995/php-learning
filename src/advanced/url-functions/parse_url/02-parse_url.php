<?php
$url = "https://user:pass@example.com:8080/products/laptop?id=25&sort=price#details";

$parse = parse_url($url, PHP_URL_FRAGMENT);

var_dump($parse); // details 
