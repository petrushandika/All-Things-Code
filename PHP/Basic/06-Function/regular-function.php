<!-- Function -->
<!-- 
    - Function adalah block kode program yang akan berjalan saat kita panggil
    - Sebelumnya kita sudah menggunakan function isset(), count() dan lain lain
    - Untuk memb {
    echo "Hi" . PHP_EOL;} {
        function hi()
        }uat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung() dan diakhiri dengan block
    - Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung ()
    - Di bahasa pemrograman lain, function juga disebut dengan method
-->

<?php
function sayHello() {
    echo "Hello Function" . PHP_EOL;
}
sayHello();
?>

<!-- Lokasi Function -->
<!-- 
    - PHP sangat flexible dalam pembuatan function
    - Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
    - Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
    - Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan
-->

<?php
$buat = true;

if ($buat) {
    function hi() {
        echo "Hi" . PHP_EOL;
    }
    hi(); 
}
?>
