<?php
// التحقق من الأكواد - نسخة صارمة
$code = isset($_GET['code']) ? $_GET['code'] : '';

// سجل الطلب (للتتبع)
$log = date('Y-m-d H:i:s') . " - Code: " . $code . "\n";
file_put_contents('log.txt', $log, FILE_APPEND);

if (empty($code)) {
    echo "INVALID";
    exit;
}

// الأكواد الصالحة فقط - أضف هنا الأكواد التي يبيعها البوت
$valid_codes = [
    "12345678" => true,
    "87654321" => true,
    "20081212" => true,
    "57298314" => true,
];

if (isset($valid_codes[$code])) {
    echo "VALID";
} else {
    echo "INVALID";
}
?>
