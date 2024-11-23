<!-- Tipe Data Array -->
<!-- 
    - Array adalah tipe data yang berisikan kosong atau banyak data
    - Array di PHP bisa berisikan data dengan jenis berbeda-beda
    - Array di PHP memiliki panjang dinamis, artinya kita bisa menambahkan data ke Array sebanyak-banyaknya, tidak dibatasi kapastitasnya
-->

<?php
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Petrus", "Handika", "Sinaga"];
var_dump($names);
?>

<!-- Operasi Array -->
<!--
    - $array[index], mengakses data di array pada nomor index
    - $array[index] = value, mengubah data di array pada nomor index dengan value baru
    - $array[] = value, menambah data di array pada posisi paling belakang
    - unset($array[index]), menghapus data di array, index otomatis hilang dari array
    - count($array), mengambil total data di array
-->

<?php
$names = ["Petrus", "Handika", "Sinaga"];
var_dump($names[0]);
$names[0] = "Budi";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Petrus";
var_dump($names);
var_dump(count($names));
?>

<!-- Array sebagai Map -->
<!-- 
    - Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value
    - Namun di PHP, Map bisa dibuat menggunakan Array
    - Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas memasukkan data ke dalam array
    - Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misal nya
    - Hal tersebut terlihat seperti Map di bahasa pemrograman lain
-->

<?php
$petrus = array (
    "id" => "petrus",
    "name" => "Petrus Handika",
    "age" => 22
);
var_dump($petrus);

$handika = [
    "id" => "handika",
    "name" => "Handika Sinaga",
    "age" => 23 
];
var_dump($handika);
?>

<!-- Array di dalam Array -->
<!-- 
    - Array PHP bisa berisikan data apapun
    - Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
-->

<?php
$petrus = array(
    "id" => "petrus",
    "name" => "Petrus Handika",
    "age" => 22,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
    );
var_dump($petrus["address"]["country"]);
?>