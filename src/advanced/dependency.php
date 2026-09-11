<?php


// Dependency is a thing that a class needs it to operate 
class Database {}

class UserRepository
{
    private Database $database;

    public  function __construct(Database $database)
    {
        $this->database = $database;
    }
}
