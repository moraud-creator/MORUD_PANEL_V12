<?php
// التحقق من الأكواد
$code = isset($_GET['code']) ? $_GET['code'] : '';

if (empty($code)) {
    echo "INVALID";
    exit;
}

// الأكواد الصالحة (يمكنك إضافتها يدوياً)
$valid_codes = [
    "12345678" => ["used" => false],
    "87654321" => ["used" => false],
    "20081212" => ["used" => false],
];

if (isset($valid_codes[$code])) {
    if ($valid_codes[$code]["used"]) {
        echo "USED";
    } else {
        echo "VALID";
    }
} else {
    echo "INVALID";
}
?>
