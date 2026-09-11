<?php

class User
{
    public static int $count = 0;
}


$user = new User(0);


echo User::$count;

class User2
{
    public static function sayHello()
    {
        echo "Hello";
    }
}

User2::sayHello();

//
//Object → ->
//Class  → ::

$user2 = new User2();

$user2->sayHello();
User2::sayHello();
