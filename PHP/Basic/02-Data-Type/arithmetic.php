<?php
print("Operator Aritmatika \n");
// Operator Aritmatika
$a = 10;
$b = 20;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);

print("Penugasan Aritmatika \n");
// Penugasan Aritmatika
$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit;
var_dump($total);
$total += $chicken;
var_dump($total);
$total += $orangeJuice;
var_dump($total);

print("Operator Perbandingan \n");
// Operator Perbandingan
/*
- Operator perbandingan, seperti namanya, digunakan untuk membandingkan dua buah value
- Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah
*/
var_dump("10" == 10);
var_dump("10" === 10);

var_dump(9 < 9);
var_dump(9 <= 9);

// Operator Logika
print("Operator Logika \n");
var_dump(true && true);
var_dump(true && false);
var_dump(true || false);
var_dump(true xor true);
var_dump(!true);
?>
