<?php
$a = "hello world";
$b = "User_123_test";
$c = "PHP is AWESOME!";

echo strtoupper($a) . "\n";
echo strtoupper($b) . "\n";
echo strtoupper($c) . "\n";


function validateCoupon(string $inputCode, array $validCoupons): bool
{
    // استانداردسازی ورودی کاربر به حروف بزرگ
    $normalizedCode = strtoupper(trim($inputCode));

    return in_array($normalizedCode, $validCoupons, true);
}

// دیتابیس کدهای معتبر
$databaseCoupons = ["SUMMER50", "BLACKFRIDAY", "WELCOME10"];

$userInput = "  summer50  ";

if (validateCoupon($userInput, $databaseCoupons)) {
    echo "کد تخفیف معتبر است!";
} else {
    echo "کد نامعتبر است.";
}
// خروجی: کد تخفیف معتبر است!