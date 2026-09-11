<?php

class User
{
    public string $name = "mousa";
    public function hellow()
    {
        echo "hellow ";
    }
}

$user1 = new User();
$user1->hellow();
