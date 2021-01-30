<?php
    $x = 5; //global scope
    
    function mytest(){
        global $x; //การปะกาศตัวแปร global
        echo"Varriable x inside function is :$x</p>";
    }
    myTest();
    echo"Varriable x inside function is :$x</p>"
?>