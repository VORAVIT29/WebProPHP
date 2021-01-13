<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x=100;
        $y=200;
        $z='300';
        $add =$x + $y;
        $sub = $add - $x;
        $mul  = $sub * $add;
        $message = "Hello World";
        echo $x;        echo "<br />";
        echo $y;        echo "<br />";
        echo $z;        echo "<br />";
        echo $add;      echo "<br />";
        echo $sub;      echo "<br />";
        echo $message;  echo "<br />";
        echo "ผลบวก $x + $y = ".$add."<br>";
        echo "ผลลบ $add - $x = ".$sub."<br>";
        echo "ผลคูณ $sub x $add = ".$mul."<br>";
        echo "ผลหาร $mul / $add = ".$mul / $add."<br>"
    ?>
</body>
</html>