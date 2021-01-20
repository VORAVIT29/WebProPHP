<?php
$x = 100;
$y = 10;
$op = '+';

switch ($op) {
    case '+':
        plus();
        break;
    case '-':
        sub();
        break;
    case '*':
        mul();
        break;
    default:
        div();
}

/*if($op == '+'){
    plus();
}
else if($op == '-'){
    sub();
}
else if($op == '*'){
    mul();
}
else if($op == '/'){
    div();
}*/

    function plus(){ //บวก
        global $x,$y;
      echo"x + y = ".$x + $y."<br>"; 
    }

    function sub(){ //ลบ
        global $x,$y;
        echo"x - y = ".$x - $y."<br>"; 
    }

    function mul(){ //คูณ
        global $x,$y;
        echo"x * y = ".$x * $y."<br>"; 
    }

    function div(){ //หาร
        global $x,$y;
        echo"x / y = ".$x / $y."<br>"; 
    }
?>