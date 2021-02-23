<?php

$check = 1;
echo "<center><font size='5'>Find <strong>Prime Number</strong> (1 - 100)</font></center><br>";
for ($i = 1; $i <= 100; $i++) { //Start for out
    $check = 1;
    for ($j = 2; $j < $i; $j++) { // Start for in
        if ($i % $j == 0) {
            $check = 0;
            break;
        }
    } // End for  in

    if ($check && $i != 1) { //Start if
        echo '<font size="5">';
        if ($i == 2) {
            echo "<br>Prime Number = " . $i;
        } else {
            echo " , " . $i;
        }
        echo '</font>';
    } //End if
} // End for  out
