<?php
//unlink()
//    ↓
// can delete FILE ✅

// can't delete DIRECTORY ❌

$path = "some path";
$result = unlink($path);

if ($result === true) {
    echo "File deleted.";
} else {
    echo "Could not delete file.";
}
