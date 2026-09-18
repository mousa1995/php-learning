<?php
// Very malformed URL can force parse_url to return false 
$malformed = "//?param1=sas23456sdfd&param2=1368115104&parama3=more/resource";

$parse = parse_url($malformed);

var_dump($parse); // bool(false)
