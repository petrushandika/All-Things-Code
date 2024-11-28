<!-- Anonymous Function -->
<!-- 
    - Anonymous function adalah function tanpa nama, di PHP disebut dengan Closure
    - Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
    - Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya
-->

<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Petrus");
$sayHello("Handika");

// Anonymous Function Sebagai Argument
function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Petrus", function(string $name) {
    return strtoupper($name);
});
?>

<!-- Mengakses Variable di Luar Closure -->
<!-- 
    - Secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function
    - Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan
-->

<?php
$firstName = "Petrus";
$lastName = "Handika";

$sayHelloPetrus = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloPetrus();
?>