<?php

$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
] ;

echo "<h5>Judul buku PHP</h5>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";

?>