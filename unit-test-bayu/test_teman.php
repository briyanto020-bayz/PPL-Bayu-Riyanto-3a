<?php
require_once 'validatornama.php';

// Silakan ganti "Nama Teman Anda" dengan nama lengkap teman yang sebenarnya
$namaTeman = "Budi Santoso"; 

$testCases = [
    "Nama Lengkap Teman" => $namaTeman, 
    "Dengan Angka"       => "1212",
    "Input Kosong"       => ""
];

echo "==========================================" . PHP_EOL;
echo " HASIL TESTING VALIDASI NAMA MAHASISWA " . PHP_EOL;
echo "==========================================" . PHP_EOL;

foreach ($testCases as $label => $input) {
    $result = Validator::ValidateName($input);
    
    echo "Kasus: $label" . PHP_EOL;
    echo "Input: \"$input\"" . PHP_EOL;
    echo "Status: " . ($result['status'] ? "PASS" : "FAIL") . PHP_EOL;
    echo "Pesan: " . $result['message'] . PHP_EOL;
    echo "------------------------------------------" . PHP_EOL;
}
?>