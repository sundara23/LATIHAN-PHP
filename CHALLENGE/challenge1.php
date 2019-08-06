<?php
    for ($i=1; $i <= 7 ; $i++) { 
        if ($i % 5) {
            echo $i;
        }
    }
    echo "<br><br><br>";
    for ($i=0; $i < 10 ; $i++) { 
        if ($i > 0 && $i < 8 ) {
            if ($i != 5) {
                echo $i;
            }
        }
    }
    echo "<br><br><br>";
    for ($i=1; $i <= 10 ; $i++) { 
        if ($i % 2==0 ) {
            echo $i;
        }
    }

?>