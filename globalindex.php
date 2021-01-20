<?php
    $x = 5;
    $y = 10;
    $z = $x + 5;

    function mytest(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] + $GLOBALS['z'];
    }

    mytest();
    echo"<h1> $y </h1>"
?>