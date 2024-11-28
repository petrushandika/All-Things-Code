<!-- Type Declaration -->
<!-- 
    - Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
    - Kadang terlalu dinamis yang menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument tipe data tertentu
    - Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
    - Jika tipe data value tidak sesuai, maka akan terjadi error
    - Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int
-->

<!-- Valid Types -->
<!-- 
    - Class / Interface = Parameter harus tipe Class / Interface
    - self = Parameter harus sama dengan Class dimana function ini dibuat
    - array = Parameter harus array
    - callable = Parameter harus callable
    - bool = Parameter harus boolean
    - float = Parameter harus floating point
    - int = Parameter harus integer number
    - string = Parameter harus string
    - interable = Parameter harus array atau tipe Traversable
    - object = Parameter harus sebuah object
-->

<?php
function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);
?>

<!-- Variable-length Argument List -->
<!-- 
    - Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
    - Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu menual mengirim array ke functionnya
    - Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
    - Untuk membuat variable-lenth argument list, kita bisa menggunakan tanda ... (titik tiga kali) sebelum argument    
-->

<?php
function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
?>

