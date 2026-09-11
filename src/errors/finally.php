<?php

// try {
//     // ممکن است Exception رخ دهد
// } catch (Exception $e) {
//     // مدیریت Exception
// } finally {
//     // در هر صورت اجرا می‌شود
// }



try {
    echo "Before\n";

    throw new Exception("Something went wrong");
} catch (Exception $e) {
    echo "Caught\n";
} finally {
    echo "Finally\n";
}

echo "After\n";
