<?php
//حتی 10.0 هم Float است، با اینکه از نظر مقدار برابر 10 است.

$price = 1200;
$taxRate = 0.09;

echo $price + $price * $taxRate;
