<html>
<form method="POST">
    <input name="name" placeholder="name">
    <input name="age" placeholder="age">
    <button type="submit">Send</button>
</form>

<?php

echo '<pre>';

echo "=== isset() ===\n";

var_dump(isset($_POST['name']));
var_dump(isset($_POST['age']));
var_dump(isset($_POST['email'])); // undefined key

echo "\n=== empty() ===\n";

var_dump(empty($_POST['name']));
var_dump(empty($_POST['age']));
var_dump(empty($_POST['email'])); // undefined key

echo "\n=== Raw POST data ===\n";

print_r($_POST);

echo '</pre>';

?>

</html>