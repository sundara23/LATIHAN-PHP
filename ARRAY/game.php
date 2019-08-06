<?php
    $gedung = ['internet 240mbps', 'internet kabel nya putus', 'token nya abis'];
    
    for ($i=1; $i <=10 ; $i++) {
        if ($i == 5 || $i == 9) {
            echo 'Gedung '.$i.' '.$gedung[1].'<br>';
        }else if ($i == 7) {
            echo 'Gedung '.$i.' '.$gedung[2].'<br>';
        }else {
        echo 'Gedung '.$i.' '.$gedung[0].'<br>';
        }
    }

    // echo "<br><br><br>";

    // for ($i=1; $i <=10 ; $i++) {
    //    switch (true) {
    //        case $i == 5 || $i == 9 :
    //             echo 'Gedung '.$i.' '.$gedung[1].'<br>';
    //            break;
    //         case $i == 7 :
    //             echo 'Gedung '.$i.' '.$gedung[2].'<br>';
    //            break;
    //        default:
    //             echo 'Gedung '.$i.' '.$gedung[0].'<br>';
    //            break;
    //    }
    // }
?>