<!-- Function Return Value -->
<!-- 
    - Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
    - Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
    - Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
-->

<?php
function sum(int $first, int $second) {
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);
?>

<?php
function getFinalValue(int $value) {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);
?>

<!-- Return Type Declaration -->
<!-- 
    - Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
    - Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai mengembalikan tipe data yang salah di function
    - Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan: diikuti tipe daa kembaliannya
-->
<?php
function sumAll(int $first, int $second): int {
    return $first + $second;
}
?>

