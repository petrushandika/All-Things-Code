<!-- Else If Statement -->
<!-- 
    - Kadang dalam if, kita butuh membuat beberapa kondisi
    - Kasus seperti ini, di PHP kita bisa menggunakan Else If statement
    - Else if di PHP bisa lebih dari satu
    - Kode Else if di PHP bisa menggunakan "else if" atau "else if" (digabung)
-->

<?php
$nilai = 70;
$absen = 60;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}
?>

<!-- Syntax Alternatif -->
<!-- 
    - Selain menggunakan :(kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua)
    - Namun untuk menggunakan ini, kita harus menggunaakn kata kunci endif diakhir if statement
-->

<?php
$nilai = 70;
$absen = 60;

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
?>