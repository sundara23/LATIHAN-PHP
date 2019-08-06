<?php
$hari = date("D");
    switch ($hari) {
        case 'Sun': 
        $hari = "Minggu";
            break;
        case 'Mon':
            $hari = "Senin";
            break;
        case 'Tue':
            $hari = "Selasa";
            break;
        case 'Wed':
            $hari = "Rabu";
            break;
        case 'Thu':
            $hari = "Kamis";
            break;
        case 'Frid':
            $hari = "Jum'at";
            break;
        case 'Sat':
            $hari = "Sabtu";
            break;
        default:
            $hari = "Libur";
            break;
    }
    echo "Sekarang itu Hari $hari";
    echo "<br><br><br>";

    echo "<h1> Perulangan </h1> <br><br>";
    echo "Perulangan for <br>";
    // Perulangan For
    for ($i=0; $i < 10; $i++) { 
        echo "Contoh Perulangan ke $i <br>";
    }
    echo "<br><br><br>Perulangan while <br><br><br>";
    // Perulangan While
    $x = 1;
    while ($x <= 10) {
        echo "Bus $x Masuk <br>";
        $x++;
    }

    echo "<br><br><br>Perulangan 'do' <br><br><br>";

    $i = 1;
    do {
        echo "murid $i Sakit <br>";
        $i++;
    } while ($i <= 10);

?>