<!-- Tipe Data String  -->
<!-- 
    - Tipe data string adalah tipe data representasi dari teks
    - String bisa mengandung kosong atau banyak karakter
-->

<?php
// Double Quote
// Keuntungan menggunakan double quote adalah bisa menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk TAB dan lainnya
echo "Nama : ";
echo "Petrus Handika Sinaga";

// Single Quote
echo 'Nama : ';
echo 'Petrus Handika Sinaga';
echo "\n";

// Multiline String - Heredoc
echo <<<PETRUS
Selamat belajar PHP,
Sekarang kita menggunakan multiline string heredoc
Semoga anda menjadi pro
PETRUS;

// Multiline String - Nowdoc
echo <<<'PETRUS'
Selamat belajar PHP,
Sekarang kita menggunakan multiline string heredoc
Semoga anda menjadi pro
PETRUS;
?>