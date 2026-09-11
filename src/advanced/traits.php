<?php

// it is a piece of ready code that we may need it several places  
trait Logger
{
    public function log()
    {
        echo "Logging...";
    }
}
class User
{
    use Logger;
}

class Expense
{
    use Logger;
}
