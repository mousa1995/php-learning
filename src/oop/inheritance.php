<?php

class User
{
    public function login()
    {
        echo "Login";
    }
}

class Admin extends User {}


$admin = new Admin("name");

$admin->login();
