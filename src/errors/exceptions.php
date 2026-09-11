<?php

// echo "before";

// throw new Exception("Something went wrong");

// echo "After";

echo "Before";

try {
    throw new Exception("Something went wrong");
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "After";
