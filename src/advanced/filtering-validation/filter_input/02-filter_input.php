<html>

<form method="POST">
    <input type="text" name="post">
    <button type="submit">Send</button>
</form>

</html>


<?php

$post = filter_input(INPUT_POST, 'post', FILTER_VALIDATE_EMAIL);
var_dump($post);
?>