<!-- Expression Sederhana -->
<!-- 
    - $a = 5; Ketika kita menuliskan "5", maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression
    - Lalu kita menulis kode $b = $a; $a bisa kita bilang adalah expression, karena $a adalah nilai 5
-->

<?php
    $a = 5;
    $b = $a;
?>

<!-- Expression Complex -->
<?php
function getValue() {
    return 100;
}

$value = getValue();
?>

<!-- Statement -->
<!-- 
    - Statement bisa dibilang adalah kalimat lengkap dalam bahasa
    - Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma
-->
<?php
$name = "Petrus Handika Sinaga";

echo $name;

$date = new DateTime();
?>

<!-- Block -->
<!-- 
    - Block adalah kumpulan statement yang terdiri dari nol atau lebih statement
    - Block diawali dan diakhiri dengan kurung kurawal {}
-->
<?php
function runApp($name) {
    echo "Start Program". PHP_EOL;
    echo "Hello $name". PHP_EOL;
    echo "End Program". PHP_EOL;
}
runApp("Petrus");
?>