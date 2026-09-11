<?php

class User
{
    public function __construct($name)
    {
        echo "user created! with name : $name";
    }
}

$user1 = new User("mousa");
