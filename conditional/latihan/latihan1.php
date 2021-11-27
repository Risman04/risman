<?php

$helm = "true";
$sim = "true";
$stnk = "true";




if ($helm = "true") {
    echo "Kami cek perlengkapan surat stnk & sim nya";
} else if ($helm = "true" && $stnk = "true") {
    echo "Surat lengkap boleh kami cek sim nya";
} else if ($helm = "true" && $sim = "true" && $stnk = "true") {
    echo "Selamat berkendara dan hati-hati di jalan";
} else {
    echo "Anda kami tilang !";
}

?>