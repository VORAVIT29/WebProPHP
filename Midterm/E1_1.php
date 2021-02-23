<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php
    include('font.php');
    session_start();
    $rand = $_SESSION['rand'];
    ?>
    <title>Bingo Win!!</title>
    <style>
        button{
            width:20%;
            height:50px;
        }
    </style>
</head>

<body stype="font-family:'Monda', sans-serif;">

    <?php

    function CheckNum($checkBingo, &$count, $rand)
    {
        $checkBingo = 0;
        while (true) {
            $isnum = $Notnum = 0;

            if ($checkBingo == 5) {
                break;
            } else {
                $random = rand(0, 99);
                for ($i = 0; $i < count($rand); $i++) {

                    if ($rand[$i] == $random) {
                        $isnum = 1;
                        $checkBingo++;
                        break;
                    } else $Notnum = 1;
                }

                if ($isnum) {
                    echo "ครั้งที่ " . ++$count . " = " . $random . " => <font color='green'>
                    ยินดีด้วย คุณมีเลขนี้</font><br><br>";
                } else if ($Notnum) {
                    echo "ครั้งที่ " . ++$count . " = " . $random . " => <font color='red'>
                    เสียใจด้วย คุณไม่มีเลขนี้</font><br><br>";
                }
            }
        } //End While

    } //End function

    /* Main */
    $count = 0;
    $checkBingo = 0;

    //echo print_r($rand)."<br>";
    CheckNum($checkBingo, $count, $rand);
    echo "<center><h2>คุณ จบ BINGO เกมนี้ ใน ครั้งที่่ $count</h2><br>
<a href='E1.php'><button>
    กลับไปเล่นเกมส์ใหม่
</button></a></center>";
    ?>
</body>

</html>