<!-- For Each -->
<!-- 
    - Kadang kita biasa mengakses data array menggunakan perulangan
    - Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
    - Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis
-->

<?php
// Tanpa For Each
$names = ["Petrus", "Handika", "Sinaga"];

for($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

echo "\n";

// For Each
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

echo "\n";

// For Each
$person = [
    "first_name" => "Petrus",
    "middle_name" => "Handika",
    "last_name" => "Sinaga",
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
?>
