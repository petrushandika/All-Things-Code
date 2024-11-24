<!-- If Statement -->
<!-- 
    - Dalam PHP, adalah salah satu kata kunci yang digunakan untuk percabangan
    - Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
    - Hampir di semua bahasa pemrograman mendukung if expression
-->

<?php
$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus". PHP_EOL;
}

?>
