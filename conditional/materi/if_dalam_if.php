<?php

$umur = 19;
$menikah = true;

if ($umur > 18) {
    if ($menikah) {
        echo "Selamat datang pak!";
    }else {
        echo "Selamat datang wahai pemuda!";
    }
}else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
}

?>