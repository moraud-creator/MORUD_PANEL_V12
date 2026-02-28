<?php
// التحقق من الأكواد - نسخة محسنة
$code = isset($_GET['code']) ? $_GET['code'] : '';

if (empty($code)) {
    echo "INVALID";
    exit;
}

// الأكواد الصالحة فقط
$valid_codes = [
    "12345678" => 1,
    "87654321" => 1, 
    "20081212" => 1
];

if (isset($valid_codes[$code])) {
    echo "VALID";
} else {
    echo "INVALID";
}
?>
