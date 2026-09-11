<?php

class User
{
    private string $password;

    public function setPassword($password)
    {
        $this->password = $password;
    }
}


// Protected class and it's child's can have access to a protected value
class User2
{
    protected string $name;

    public function showName()
    {
        echo $this->name;
    }
}
