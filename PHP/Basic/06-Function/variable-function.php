<!-- Variable Function -->
<!-- 
    - PHP mendukung konsep yang bernama variable function
    - Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
    - Untuk menggunakan variable function, kita bisa secara langsung memanggil $nameVariable(), jika ingin menambahkan argument, kita bisa menggunakan $nameVariable(argument)
-->

<?php
// Basic functions
function foo() {
    echo "FOO" . PHP_EOL;
}

function bar() {
    echo "BAR" . PHP_EOL;
}

// Using variable functions
$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// Filter functions
function startUpper(string $name): string {
    return strtoupper($name);
}

function startLower(string $name): string {
    return strtolower($name);
}

// Using variable functions as filters
function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Petrus", "startUpper");
sayHello("Petrus", "startLower");
?>

