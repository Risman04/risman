<?php

$nama = "Budi";
$status = "Manager";
$keluarga = 5;
$lembur = 45;

echo "Nama : " . $nama . "<br>";
echo "Status : $status <br>";

if ($status == "Manager") {
    $gaji = 4500000 ;
    $blembur = 50000;
    $uangtransport = 50000;
    echo "Gaji pokok : $gaji";
}else if ($status == "Sekretearis") {
    $gaji = 3500000 ;
    $blembur = 45000;
    $uangtransport = 35000;
    echo "Gaji pokok : $gaji";
}else if ($status == "staff") {
    $gaji = 3000000 ;
    $blembur = 30000;
    $uangtransport = 20000;
    echo "Gaji pokok : $gaji";
}else if ($status == "Karyawan") {
    $gaji = 2800000 ;
    $blembur = 25000;
    $uangtransport = 10000;
    echo "Gaji pokok : $gaji";
}else {
    echo "Status yang anda pilih tidak ada";
}

echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : $bpjs <br>";

$pajak = $gaji * 0.025;
echo "Pajak : $pajak <hr>";

$transport = $uangtransport * 24;
echo "Uang transport : $transport <br>";

$tunjangan = $gaji * 0.1;
echo "Tunjangan : $tunjangan <br>";

$bonuslembur = $blembur * $lembur;
echo "Uang lembur : $bonuslembur <hr>";

$bonus = $transport + $tunjangan + $bonuslembur;
echo " Bonus : $bonus <hr>";

$tpajak = $bpjs + $pajak;
echo "Potongan : $tpajak <hr>";

$gajibersih = ($gaji - $tpajak) + $bonus;
echo "Gaji bersih : $gajibersih <hr>";

?>