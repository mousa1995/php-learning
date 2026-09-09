<?php


// learning count() array function
$fruits = ["apple", "banana", "orange"];

echo count($fruits) . PHP_EOL;
// => 3


$expenses = [120, 450, 80, 200, 50];

echo count($expenses) . PHP_EOL;
// => 5


$expenses = [];

echo count($expenses) . PHP_EOL;
// => 0


$expenses = [100];

echo count($expenses) . PHP_EOL;
// => 1 


$expenses = [100, 200, 300];

echo count($expenses) . PHP_EOL;
// => 3 

/// Learning Array_push() adds an element to the end of the array

// Array_push mutates the array !

$fruits = ["apple", "banana"];

array_push($fruits, "orange");

print_r($fruits);
// print_r it makes something like this 
//                           | |
//                           \_/

//                          Array
//                               (
//                               [0] => apple
//                               [1] => banana
//                               [2] => orange
//                               )

$expenses = [100, 200, 300];
$expenses[] = 400;

echo "expenses: " . count($expenses) . PHP_EOL;

array_push($expenses, 500);

echo "expenses: " . count($expenses) . PHP_EOL;


print_r($expenses);


// Learning Array_pop removed from the end of array and can return the last element

// [100, 200, 300, 400]
//                  ↑
//                 pop

$expenses = [100, 200, 300, 400];
$removed = array_pop($expenses);
echo "expenses after pop => ";
print_r($expenses);

echo "removed item => ";
echo $removed . "\n";

echo "remaining elements => ";
echo count($expenses) . "\n";


// Learning Array_shift removes an element from the start of the array it can return first element
$expenses = [100, 200, 300, 400];

$removed = array_shift($expenses);

echo "removed item => ";
echo $removed . "\n";

echo "remaining elements => ";
echo count($expenses) . "\n";

// Learning Array_unshift => adds en element to the start of array
$expenses = [200, 300, 400];

array_unshift($expenses, 100);

print_r($expenses);



/// summary 

//----------------------
// unshift → [ START ]
// shift   → [ START ]

// push    → [ END ]
// pop     → [ END ]
//-----------------------