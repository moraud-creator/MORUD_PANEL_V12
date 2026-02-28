<?php
$code = isset($_GET['code']) ? $_GET['code'] : '';

if (empty($code)) {
    echo "INVALID";
    exit;
}

// الأكواد الصالحة فقط
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
