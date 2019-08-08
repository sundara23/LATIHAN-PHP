<?php

$dataKaryawan = [
    ["nik"=>"112233", "nama"=>"Jaka", "jk"=>"Laki - Laki", "umur"=>25, "alamat"=>"Rangkasbitung - Lebak", "jabatan"=>"IT Developer", "spesialis"=>"Programmer"],
    ["nik"=>"223344", "nama"=>"Joko", "jk"=>"Laki - Laki", "umur"=>23, "alamat"=>"Jakarta Pusat", "jabatan"=>"Digital Marketing", "spesialis"=>"Pemasaran"],
    ["nik"=>"334455", "nama"=>"Adinda", "jk"=>"Perempuan", "umur"=>20, "alamat"=>"Tangerang Selatan", "jabatan"=>"Admin", "spesialis"=>"Entry Data"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Native</title>
</head>
<body>
    <?php
    foreach ($dataKaryawan as $data) {?>
        <ul>
            <li> NIK : <?= $data['nik'] ?></li>
            <li> Nama : <?= $data['nama'] ?></li>
            <li> Jenis Kelamin : <?= $data['jk'] ?></li>
            <li> Umur : <?= $data['umur'] ?></li>
            <li> Alamat : <?= $data['alamat'] ?></li>
            <li> Jabatan : <?= $data['jabatan'] ?></li>
            <li> Spesialis : <?= $data['spesialis'] ?></li>
        </ul>
    <?php } ?>
</body>
</html>
