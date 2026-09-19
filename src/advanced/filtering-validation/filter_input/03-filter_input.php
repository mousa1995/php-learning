<html>

<form method="POST">
    <input placeholder="email" type="text" name="email">
    <input placeholder="age" type="text" name="age">
    <button type="submit">Send</button>
</form>

</html>

<?php

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
echo "email: \n";
var_dump($email);

$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

echo "age: \n";
var_dump($age);
