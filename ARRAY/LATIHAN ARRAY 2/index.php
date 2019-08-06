<?php
    $karyawan = [
        ['Mark Abdullah','46345323','mark.abdullah@gmail.com','Fullstack Web Developer'],
        ['John Cenah','32343423','john.cenah@gmail.com','Backend Developer'],
        ['Komedian Kondang','345452823','kotakan.sawah@gmail.com','Frontend Developer'],
        ['Tsubatsa Amami','17283462353','tsubatsa.amami@gmail.com','Digital Marketing'], 
        ['Wakabayatsu sugiono', '9458739424','wakawakaee@gmail.com','Analisis Data']
    ];
    foreach ($karyawan as list($nama, $nik, $email, $bagian)) {
        echo $nik.'<br>';
    }
?>
