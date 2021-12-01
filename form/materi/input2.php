<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Pendaftaran peserta didik baru</legend>
        <form action = "proses2.php" method = "post" >
        <table border = "1">
            <tr>
                <th style = "text-align:left">Nama lengkap</th>
                <td>:</td>
                <td>
                    <input type = "text" name = "nama" size = "50">
                </td>
            </tr>
            <tr>
                <th style = "text-align:left">Email</th>
                <td>:</td>
                <td>
                    <input type = "email" name = "email" size = "50">
                </td>
            </tr>
            <tr>
                <th style = "text-align:left">Jenis kelamin</th>
                <td>:</td>
                <td>
                    <input type = "radio" name = "jk" value = "Laki-laki"> Laki-laki
                    <input type = "radio" name = "jk" value = "Perempuan"> Perempuan

                </td>
            </tr>
            <tr>
                <th style = "text-align:left">Agama</th>
                <td>:</td>
                <td>
                    <select name = "agama" id = "">
                        <option value = "Islam">Islam</option>
                        <option value = "Kristen">Kristen</option>
                        <option value = "Budha">Budha</option>
                        <option value = "Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th style = "text-align:left">Tinggi badan & Berat badan</th>
                <td>:</td>
                <td>
                    <input type = "number" name = "tb" min ="100" max = "200" placeholder = "Tinggi Badan">
                    <input type = "number" name = "bb" min ="1" max = "100" placeholder = "Berat Badan">
                </td>
            </tr>
            <tr>
                <th style = "text-align:left">Kelengkapan persyaratan</th>
                <td>:</td>
                <td>
                    <input type = "checkbox" name = "sSehat" id ="">Surat sehat
                    <input type = "checkbox" name = "kk" id ="">Kartu Keluarga
                    <input type = "checkbox" name = "skl" id ="">Surat keterangan lulu
                </td>
            </tr>
            <tr>
                <th style = "text-align:left">Nomor Telpon / HP</th>
                <td>:</td>
                <td>
                    <input type = "number" name = "nomor" id ="">
                </td>
            </tr>
            <tr>
                <th>
                    <button type = "submit" name = "simpan">Daftar</button>
                    <button type = "reset" >Bersihkan Formulir</button>
                </th>
            </tr>
        </table>
        </form>
    </fieldset>
</body>
</html>