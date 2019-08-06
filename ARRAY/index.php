<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array</title>

    <style>
        .kotak{
            background-color: red;
            padding : 20px;
            width : 20px;
            height: 20px;
            margin: 5px;
            text-align: center;
            float: left;
        }
        .kotak2{
            background-color: yellow;
            padding : 20px;
            width : 20px;
            height: 20px;
            margin: 5px;
            text-align: center;
            float: left;
        }
        .batas{
            width: 400px;
        }
    </style>
</head>
<body>
<?php
/*******
Contoh Perulangan for
*/
// $warna = ["blue", "red", "yellow", "green", "grey"];
// foreach ($warna as $warnas) {
//     echo "warnanya adalah <font color=$warnas> ".$warnas." </font><br>";

// }
// echo "<br><br><br>";
// for ($i=0; $i < count($warna) ; $i++) { 
//     echo "warnanya adalah <font color=$warna[$i]> ".$warna[$i]." </font><br>";
// }

// echo "<br><br><br>";

// for ($i=1; $i <= 10 ; $i++) { 
//     for ($k=1; $k <= $i; $k++) { 
//         echo "*";
//     }
//     echo "<br>";
// }

// echo "<br><br><br>";
// for ($i=10; $i >= 1 ; $i--) { 
//     for ($k=1; $k <= $i; $k++) { 
//         echo "*";
//     }
//     echo "<br>";
// }

$warna = [3,2,15,20,11];
?>
<div class="batas">
<?php
for ($row=0; $row <3; $row++) : 
    for ($col=0; $col < count($warna); $col++) : ?>
        <div class="kotak"><?php echo $warna[$col]; ?> </div>
<?php
    endfor;
    echo "<br>";
endfor;
?>
</div>
<div class="batas">
<?php
foreach ($warna as $pelangi ) :
    foreach ($warna as $pelangi ) : ?>
        <div class="kotak2"><?php echo $pelangi; ?> </div>
<?php
    endforeach;
    echo '<br>';
endforeach;
?>
</div>
</body>
</html>