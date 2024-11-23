<!-- Variable -->
<!-- 
    - Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan di kode program selanjutnya
    - Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
    - Untuk membuat variable kita bisa menggunakan tanda $ (dollar) diikuti dengan nama variable nya
    - Penamaan variable tidak boleh mengandung spasi
-->

<?php
$name = "Petrus";
$age = 30;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
?>

<!-- Variable Variables -->
<!-- 
    - PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
    - Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
    - Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya
-->

<?php
$name = "Petrus";
$$name = "Handika";

echo "\$name = ";
echo $name;
echo "\n";
echo "\$Petrus = ";
echo $Petrus;
echo "\n";
?>