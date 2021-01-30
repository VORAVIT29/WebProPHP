<?php
    $op = $_GET['op'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = 0;
    switch ($op) {
        case '+':
            $sum = $num1 + $num2;
            break;
        case '-':
            $sum = $num1 - $num2;
            break;
        case '*':
            $sum = $num1 * $num2;
            break;
        case '/':
            $sum = $num1 / $num2;
            break;
    }

    echo "Show Result<br>";
    echo "X :".$num1."<br>";
    echo "Y :".$num2."<br>";
    echo "Operator :".$op."<br>";
    echo "x ".$op." y = ".$sum."<br>";
    
?>