<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CalRandom</title>

    <style>
        table {
            width: 50%;
        }

        td {
            height: 50px;
            text-align: center;
        }

        button {
            width: 20%;
            height: 50px;
        }
    </style>
</head>

<body>
    <center>
        <?php

        $row = $_POST['row'];
        $col = ($_POST['col'] != "") ? $_POST['col'] : 5;
        $start = ($_POST['start'] != "") ? $_POST['start'] : 0;
        $end = $_POST['end'];
        $rand = array();
        $i = 0;

        echo "<h1>Random</h1>
            <table>";
        for ($r = 0; $r < $row; $r++) {
            echo "<tr>";
            for ($c = 0; $c < $col; $c++) {

                array_push($rand, rand($start, $end));
                echo "<td>" . $rand[$i] . "</td>";
                $i++;
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "หาความถี่ของตัวเลข<br><br>";

        $arr_count = array_count_values($rand); //หาจำนวนตัวแปรที่กำหนดว่ามีกี่ตัว
        $numNo = array_unique($rand); //เก็บค่าที่ไม่ซ้ำกัน
        sort($numNo);

        for ($i = 0; $i < count($numNo); $i++) {
            echo  $numNo[$i] . ' = ' . $arr_count["$numNo[$i]"] . '<br>';
        }
        ?><br>
        <a href="random.php"><button>Back</button></a>
    </center>
</body>

</html>