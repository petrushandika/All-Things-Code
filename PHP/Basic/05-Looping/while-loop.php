<!-- While Loop -->
<!-- 
    - While loop adalah versi perulangan yang lebih sederhana dibanding for loop
    - Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement
-->

<?php
$counter = 1;

while ($counter <= 10) {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
}

echo ("\n");

// Syntax Alternative While Loop
while ($counter <= 10) :
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;
?>
