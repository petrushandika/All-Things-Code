<?php
// Dot Operator
/* 
    - Dot(titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya)
    - Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain
*/

$name = "Petrus Handika";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

// Konversi ke Number dan Sebaliknya
/*
    - Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
    - Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung (tipe data)
    - Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point
*/

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// Mengakses Karakter
/*
    - String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
    - Sama seperti di array, index pertama dimulai dari 0
    - Jika kita mengakses index melebihi karakter di string, maka akan terjadi error
*/

$name = "Dika";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

// Variable Parsing
/*
    - Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable
    - Ini memudahkan ketika kita ingin menggabungkan string dengan variable
    - Cara penggunaannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya
*/

$name = "Ujang";
echo "Hello $name, Selamat Belajar" . PHP_EOL;

// Curly Brace
/*
    - Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
    - Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing
*/

$name = "Jamal";
echo "This is {$name}s" . PHP_EOL;
?>