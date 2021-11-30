<?php

$siswa = [
    ['nama' => 'Novy Safitri' . "<br>", 'jk' => 'perempuan' . "<br>", 'umur' => 16],
    ['nama' => 'Putri Novita Sari' . "<br>", 'jk' => 'perempuan' . "<br>", 'umur' => 16],
    ['nama' => 'Risma Lukman Hakim' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Risman Nurrizki' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 16],
    ['nama' => 'Risnadia Azizah' . "<br>", 'jk' => 'perempuan' . "<br>", 'umur' => 16],
    ['nama' => 'Rizal Firziawan Sidik' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Rizky Yudha Pratama' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Robby Fauzia Reynaldi' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Rohesa Sidiq Permana' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Suci Oktavia, Sumiati' . "<br>", 'jk' => 'perempuan' . "<br>", 'umur' => 17],
    ['nama' => 'Surya Wirnadinata' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Virgi Septian' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Wildan Mochamad Nur Fallah' . "<br>", 'jk' => 'laki-laki' . "<br>", 'umur' => 17],
    ['nama' => 'Yulianti Arthamevia' . "<br>", 'jk' => 'perempuan' . "<br>", 'umur' => 17]
];
    
foreach ($siswa as $value) {
    echo "Nama : " . $value['nama'];
    echo "Jenis Kelamin : " . $value['jk'];
    echo "Umur : " . $value['umur'];
    echo "<hr>";
}
    

    


?>