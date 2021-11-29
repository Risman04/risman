<?php

$jurusan = "TKRO";
$kelas = "11 TKRO";

if ($jurusan == "TKRO") {
    if ($kelas == "10VTKRO") {
        echo "Ini kelas 10 TKRO";
    }else if ($kelas == "11TKRO") {
        echo "Ini kelas 11 TKRO";
    }else if ($kelas == "12TKRO") {
        echo "Ini kelas 12 TKro";
    }else {
        echo "Kelas yang anda pilih tidak ada";
    }
}

?>