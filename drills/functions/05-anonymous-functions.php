<?php


//A named function has a name, a default parameter provides a fallback value,
// and an anonymous function has no name and is usually assigned to a variable.
$greet = function (string $name = "Guest"): string {
    return "hello $name \n";
};

// Not !  echo greet(...)
echo $greet("Mousa");
