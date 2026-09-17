<?php
var_dump(is_array([1, 2, 3])); //true
var_dump(is_array("PHP")); // false
var_dump(is_array(123)); // false
var_dump(is_array(true)); // false
var_dump(is_array(null)); // false 


$getFirstItem = function ($item) {
    if (!is_array($item)) {
        echo "parameter is not a array";
        return;
    }
    echo $item[0];
    return;
};

$getFirstItem(["PHP", "Laravel", "MySQL"]);
// PHP

$getFirstItem("PHP");
// Expected an array
