<!-- Function Argument -->
<!-- 
    - Kita bisa mengirim informasi ke function yang ingin kita panggil
    - Untuk melakukam hal tersebut, kita perlu menambahkan argument atau perameter di function yang sudah kita buat
    - Cara membuat argument sama seperti cara membuat variable
    - Argument ditempatkan di dalam kurung () di deklarasi function
    - Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma
-->

<?php
function sayHello($name) {
    echo "Hello $name" . PHP_EOL;
}
sayHello("Petrus");
sayHello("Handika");
?>

<!-- Default Argument Value -->
<!-- 
    - PHP mendukugn default argument value
    - Fitur ini memungkinkan jika ketika memanggil function tidak memasukkan parameter, kita bisa menentukan data default nya apa
-->

<?php
function sayHi($name = "Anonymous") {
    echo "Hello $name" . PHP_EOL;
}
sayHi();
sayHi("Petrus");
?>
