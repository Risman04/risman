<?php

$a = 3;
$b = 0;

for ($i = 1; $i <= 10; $i++) {
    for ($j = 3 + $b; $j <= $a; $j ++) {
        echo  $j . " ";
    }
    $a += 3;
    $b += 2;
    echo "<br>";
}

?>