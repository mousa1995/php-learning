<?php
$age = "25";

$result = filter_var($age, FILTER_VALIDATE_INT);

var_dump($result);
