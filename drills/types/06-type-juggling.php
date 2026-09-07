<?php

//in type juggling the initial value doesn't change 
$value = "20";
var_dump($value + 10);

var_dump($value);

// See
// E:\cmder\php-learning (master -> origin)
// λ php drills\types\06-type-juggling.php
// int(30)
// string(2) "20"