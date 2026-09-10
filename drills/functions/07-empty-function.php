<?php


// This is what empty() does 
// it does too much try to avoid it

// if (
//     isset($var) === false
//     || $var === false
//     || $var === 0
//     || $var === 0.0
//     || $var === ''
//     || $var === '0'
//     || $var === []
// ) {
//     // ...
// }


// empty() checks whether a variable is undefined or contains a value considered empty by PHP.
// Values such as 0, "0", "", false, null, and [] are considered empty.
// It returns true for empty values and false otherwise.
// Be careful: empty() can hide undefined-variable mistakes and treats several different values as empty.
// When you need to check an exact value, prefer strict comparisons such as $value === ''.