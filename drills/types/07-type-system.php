<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| PHP Type System
|--------------------------------------------------------------------------
| This file is a reference for the main type-system concepts in PHP.
*/


/*
|--------------------------------------------------------------------------
| 1. Parameter Types
|--------------------------------------------------------------------------
| Parameter types define what type of value a function expects.
*/

function add(int $a, int $b)
{
    return $a + $b;
}


/*
|--------------------------------------------------------------------------
| 2. Return Types
|--------------------------------------------------------------------------
| A return type defines what type of value a function must return.
*/

function multiply(int $a, int $b): int
{
    return $a * $b;
}


/*
|--------------------------------------------------------------------------
| 3. Nullable Types
|--------------------------------------------------------------------------
| A nullable type allows a value to be either the specified type or null.
|
| ?string means:
| string OR null
*/

function getUsername(): ?string
{
    return null;
}


/*
|--------------------------------------------------------------------------
| 4. Union Types
|--------------------------------------------------------------------------
| A union type allows a value to have one of several specified types.
|
| int|string means:
| int OR string
*/

function printValue(int|string $value): void
{
    echo $value;
}


/*
|--------------------------------------------------------------------------
| 5. Strict_types => declare(strict_types=1) ;
|--------------------------------------------------------------------------
| strict_types makes PHP stricter about scalar type handling.
*/


/*
|--------------------------------------------------------------------------
| 6. Type Coercion
|--------------------------------------------------------------------------
| type coercion is the implicit conversion of a value from one type
| to another when PHP needs it in a specific context.
*/

$number = "10";
$result = $number + 5;


/*
|--------------------------------------------------------------------------
| 7. Type Juggling
|--------------------------------------------------------------------------
| Type juggling is the broader behavior of PHP when it automatically
| handles or converts values between different types.
|
| Type coercion is one mechanism involved in this behavior.
*/


/*
|--------------------------------------------------------------------------
| 8. Type Declarations
|--------------------------------------------------------------------------
| Type declarations are the general concept of declaring types
| for parameters, return values, properties, and other parts of PHP.
*/

function greet(string $name): string
{
    return "Hello $name";
}
