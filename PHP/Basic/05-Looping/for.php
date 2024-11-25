<!-- For Loop -->
<!-- 
    - For adalah salah satu kata kunci yang bisa digunakan untuk melakukan program
    - Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi
-->

<!-- Syntax Perulangan For -->
<!-- 
    for(init statement; kondisi; post statement) {
        // blok perulangan
    }
    
    - Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
    - Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
    - Post statement akan dieksekusi setiap kali diakhir perulangan
    - Init statement, Kondisi dan Post Statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true
-->

<?php
    // Perulangan Tanpa Henti
    // for (; ;) {
    //     echo "Hello For Loop" . PHP_EOL;
    // }

    // Perulangan Dengan Kondisi
    for ($counter = 1; $counter <= 10;) {
        echo "Hello For Loop : " . $counter . PHP_EOL;
        $counter++;
    }
    
    echo("\n");
    
    // Perulangan Dengan Post Statement
    for ($counter = 1; $counter <= 10; $counter++) {
        echo "Hello For Loop : " . $counter . PHP_EOL;
    }

    echo("\n");
    
    for ($counter = 10; $counter <= 1; $counter--) {
        echo "Hello For Loop : " . $counter . PHP_EOL;
    } 
    
    echo("\n");

    // Syntax Alternative For Loop
    for ($counter = 1; $counter <= 10; $counter++) :
        echo "Hello For Loop : " . $counter . PHP_EOL;
    endfor;
?>