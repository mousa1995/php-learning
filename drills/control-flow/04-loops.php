<?php

//simple while loop
$count = 0;

while ($count <= 10) {
    echo $count . "\n";
    $count += 1;
}


//do while
$count = 0;

do {
    echo $count . "\n";
    $count++;
} while ($count <= 10);


//for Each 

$names = ["Mousa", "Ali", "John"];

foreach ($names as $name) {
    echo $name . "\n";
}

// for loop
for ($count = 0; $count <= 10; $count++) {
    echo $count . "\n";
}
