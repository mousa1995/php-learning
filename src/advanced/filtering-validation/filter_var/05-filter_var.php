<?php
$url = "https://example.com/products";

$isURL = filter_var($url, FILTER_VALIDATE_URL);

var_dump($isURL);
