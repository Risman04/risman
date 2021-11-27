<?php

$ipk ="4";


if ($ipk >= 0 && $ipk < 2 ) {
    echo "Sistem error";
} else if ($ipk >= 2 && $ipk < 2.3) {
    echo "Grade : E <br>";
    echo "Maaf anda harus mengulang";
} else if ($ipk >= 2.3 && $ipk < 2.6) {
    echo "Grade : D <br>";
    echo "Maaf anda harus memperbaiki mata kuliah";
} else if ($ipk >= 2.6 && $ipk < 3) {
    echo "Grade : C <br>";
    echo "Mau memperbaiki boleh, tidak juga tidak apa apa";
} else if ($ipk >= 3 && $ipk < 3.5) {
    echo "Grade : B <br>";
    echo "Mata kuliah anda baik";
} else if ($ipk >= 3.5 && $ipk < 4) {
    echo "Grade : A <br>";
    echo "Mata kuliah anda super";
} else if ($ipk >= 4) {
    echo "Sistem error";
}else {

}


?>