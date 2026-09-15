<?php
$text = "I love JavaScript";

$text = str_replace("JavaScript", "PHP", $text);
echo $text;


//arrays
$text = "I like PHP and JS";

echo str_replace(
    ["PHP", "JS"],
    ["Laravel", "React\n"],
    $text
);

// 1.
$comment = "This post is stupid and spam";

$test = str_replace([
    "stupid",
    "spam"
], [
    "***",
    "***"
], $comment);
echo $test;
