<html>

<form method="POST">
    <input type="text" name="website">
    <button type="submit">Send</button>
</form>

</html>

<?php

$website = filter_input(INPUT_POST, "website", FILTER_VALIDATE_URL);
var_dump($website);
