<?php

function greet(string $name = "Guest"): void
{
    echo "Hello $name\n";
}

greet("Mousa");
greet();


// A parameter with a default value must come after a required parameter.
function greet2(string $message = "Hello", string $name,): void
{
    echo "$message $name";
}
