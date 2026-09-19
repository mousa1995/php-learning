<?php
$search = "php tutorial";

$encode = urlencode($search);
echo $encode;

$url = "https://example.com/search?q=$encode";

echo $url;
