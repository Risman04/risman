<?php

$a = 6;
$b = 2;

// lebih besar
$c = $a > $b;
echo "$a > $b : $c";
echo "<hr>";

// lebih kecil
$c = $a < $b;
echo "$a < $b : $c";
echo "<hr>";

// sama dengan
$c = $a == $b;
echo "$a == $b : $c";
echo "<hr>";

// tidak sama dengan
$c = $a != $b;
echo "$a != $b : $c";
echo "<hr>";

// lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b : $c";
echo "<hr>";


// lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b : $c";
echo "<hr>";

$total_belanja = 150000;

if ($total_belanja > 100000) {
    echo "Anda Dapat Hadiah !";
}