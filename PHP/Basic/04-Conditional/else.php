<!-- Else Statement -->
<!-- 
    - Blok if dieksekusi ketika kondisi if bernilai true
    - Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
    - Hal ini dilakukan menggunakan else statement
-->

<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Selamat Anda Tidak Lulus" . PHP_EOL;
}

?>
