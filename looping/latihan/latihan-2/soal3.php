<?php

$a = 6;
$b = 0;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 2 + $b; $j <= $a; $j ++) {
        echo "$j";
    }
    $a ++;
    $b ++;
    echo "<br>";
}

?>