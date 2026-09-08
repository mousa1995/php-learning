<?php

$names = ["mousa", "ali"];

$names[] = "edvard";

echo $names[2];

$names[1] = "Mousa";


#JavaScript → names.length
#PHP        → count($names)


for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "\n";
}

echo count($names);
