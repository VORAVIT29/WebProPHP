<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include('font.php');
    ?>
    <meta charset="UTF-8">
    <title>E1</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            /*border: 2px solid black;*/
        }

        td,
        tr {
            border: 2px solid black;
            text-align: center;
        }

        tr {
            height: 70px;
        }

        button{
            background-color: skyblue;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
    </style>

</head>

<body style="font-family:'Monda', sans-serif;">
    <center>
        <h1>BINGO GAME</h1>
        <form action="E1_1.php" method="post">
            <table>
                <?php

                $index = 0;
                $rand = array();
                for ($row = 0; $row < 5; $row++) {
                    echo '<tr>';
                    for ($colum = 0; $colum < 5; $colum++) {
                        $rand[$index] = rand(0, 99);
                        echo '<td><font size="6">'  . $rand[$index] . '</font></td>';
                        $index++;
                    }
                    echo '</tr>';
                }
                //echo print_r($rand);
                $_SESSION['rand'] = $rand;
                
                ?>
            </table>
            <br><button style="width: 40%;height:50px" type="submit" name="sub">
                <font size="4"><strong>
                        START GAME</strong></font>
            </button>
        </form>
    </center>
</body>

</html>