<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'batch');
    $ambildata = mysqli_query($koneksi, 'SELECT * FROM karyawan');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>koneksi ke database mysql</title>
</head>
<body>
    <table border=1 cellpadding=10>
    <tr> 
        <th>ID</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Bagian</th>
    </tr>  
    <?php 
        while ($data = mysqli_fetch_assoc($ambildata)) {?>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nik']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['bagian']; ?></td> 
                <td> <img src="<?= $data['image']; ?>" alt="<?= $data['nama']; ?>"></td>
            </tr>
    <?php
        }
    ?>  
    </table>
</body>
</html>