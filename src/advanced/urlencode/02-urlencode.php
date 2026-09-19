<?php

$search = "PHP & Laravel";

$url = "https://example.com/search?q=" . urlencode($search);

echo $url;
// https://example.com/search?q=PHP+%26+Laravel
