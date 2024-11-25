<!-- Do While Loop -->
<!-- 
    - Do While Loop adalah perulangan yang mirip dengan while
    - Perbedaannya hanya pada pengecekan kondisi
    - Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
    - Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
-->

<?php
$counter = 100;

do {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 10);
?>