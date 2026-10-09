<?php
require_once 'Validator.php';

try {
    $result = validateAge(25);
    echo "PASS: Umur 25 diterima\n";
} catch (InvalidArgumentException $e) {
    echo "FAIL: Umur 25 tidak diterima: " . $e->getMessage() . "\n";
}
try {
    $result = validateAge(-5);
    echo " FAIL: Umur -5 diterima\n";
} catch (InvalidArgumentException $e) {
    echo "FAIL: Umur -5 ditolak. eror: " . $e->getMessage() . "\n";

}