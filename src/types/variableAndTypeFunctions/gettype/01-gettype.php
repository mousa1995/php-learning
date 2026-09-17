<?php
$name = "Mousa";

echo gettype($name);
gettype("PHP");       // "string"
gettype(100);         // "integer"
gettype(10.5);        // "double"
gettype(true);        // "boolean"
gettype(null);        // "NULL"
gettype([1, 2, 3]);   // "array"
