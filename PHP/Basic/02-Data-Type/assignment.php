<!-- Operator Increment dan Decrement -->
<!-- 
    - $a++ (Post Increment) = Kembalikan $a lalu naikkan 1 angka
    - ++$a (Pre Increment) = Naikkan $a satu angka, lalu kembalikan $a
    - $a-- (Post Increment) = Kembalikan $a lalu turunkan 1 angka
    - --$a (Pre Decrement) = Turunkan $a satu angka, lalu kembalikan $a
-->

<?php
$a = 10;
$b = ++$a;

var_dump($b);
var_dump($a);

$c = 10;
$d = $c++;

var_dump($c);
var_dump($d);
?>