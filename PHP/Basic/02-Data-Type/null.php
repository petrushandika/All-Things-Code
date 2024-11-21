<!-- Data NULL -->
<!-- 
    - Nilai NULL merepresentasikan sebuah variable tanpa nilai
    - Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
    - Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case sensitive)
    - Mengecek apakah sebuah data bernilai null, kita bisa menggunakan function is_nul ($variable)
-->

<?php
$name = "Petrus";
$name = NULL;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo is_null($name);
echo "\n";
?>

<!-- 
    Menghapus variable:
    - Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan menggunakan fuction unset ($variable)
    - Namun hati hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null ($variable) pun akan menjadi error jika mengakses variable tersebut
    - Agar lebih aman, kita bisa menggunakan function isset ($variable) untuk mengecek apakah sebuah variable ada dan nilainya tidak NULL
-->

<?php
$name = "Petrus";
unset($name);

$name = "Handika";
$name = null;

var_dump(isset($name))
?>