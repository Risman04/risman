<?php

if (isset($_POST['simpan'])) {
 
 
    $nama = $_POST['nama'];

    
    $jk = $_POST['jk'];

    if ($jk == "Laki-laki") {
        if ($tb = $_POST['tb'] . $tb < 170) {
            echo "Anda tidak diterima";
        }else {
            echo "Anda diterima";
        }
        if ($bb = $_POST['bb'] . $bb < 70) {
            echo "Anda tidak diterima";
        }else {
            echo "Anda diterima";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Pendaftaran TNI / POLRI</center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    Tinggi Badan : <b><?php echo $tb; ?></b>cm <br>
    Berat Badan : <b><?php echo $bb; ?></b>kg <br>
</body>
</html>
<?php } ?>