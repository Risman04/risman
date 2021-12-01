<?php

if (isset($_POST['simpan'])) {
 
 
    $nama = $_POST['nama'];
    $mtk = $_POST['mtk'];
    $ind = $_POST['ind'];
    $ing = $_POST['ing'];
    $kejuruan = $_POST['kejuruan'];

    $rata = $mtk + $ind + $ing + $kejuruan;
    $rata2 = $rata / 4;
    
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
    
</body>
</html>
<?php } ?>