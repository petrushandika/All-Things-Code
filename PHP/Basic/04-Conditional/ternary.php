<!-- Ternary Operator -->
<!-- 
    - Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
    - Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
    - Ternary operator menggunakan kata kunci ? dan :
-->

<?php
$gender = "PRIA";

$another = null;

if ($gender == "PRIA") {
    $another = "Hi Bro";
    echo $another . PHP_EOL;
} else {
    $another = "Hi Sist";
    echo $another . PHP_EOL;
}

// Ternary Operator
$another = $gender == "PRIA" ? "Hi Bro" : "Hi Sist";
echo $another . PHP_EOL; 
?>
