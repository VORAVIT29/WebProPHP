<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW4</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 100px;
            padding: 40px;
            font-family: 'Monda', sans-serif;
        }

        input[type=text] {
            width: 20%;
            height: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th,
        tr {
            border: 2px solid #dddddd;
        }

        th {
            height: 70px;
        }

        td {
            text-align: center;
            height: 30px;
        }
    </style>
    <?php
    $sum = 0;
    if (isset($_POST['btnsub'])) { //เหลือเช็คหน่วยกิตถ้าค่าเป็นไม่ได้ใส่
        $sj1 = $_POST['sub1'];
        $sj2 = $_POST['sub2'];
        $sj3 = $_POST['sub3'];
        $sj4 = $_POST['sub4'];
        $sj5 = $_POST['sub5'];

        $sun1 = $_POST['sun1'];
        $sun2 = $_POST['sun2'];
        $sun3 = $_POST['sun3'];
        $sun4 = $_POST['sun4'];
        $sun5 = $_POST['sun5'];

        $g1 = $_POST['grade1'];
        $g2 = $_POST['grade2'];
        $g3 = $_POST['grade3'];
        $g4 = $_POST['grade4'];
        $g5 = $_POST['grade5'];

        /*if ($g1 || $g2 || $g3 || $g4 || $g5 == "A") {
            if ($g1 == "A") $g1 = 4.0;
            if ($g2 == "A") $g2 = 4.0;
            if ($g3 == "A") $g3 = 4.0;
            if ($g4 == "A") $g4 = 4.0;
            if ($g5 == "A") $g5 = 4.0;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "B+") {
            if ($g1 == 'B+') $g1 = 3.5;
            if ($g2 == 'B+') $g2 = 3.5;
            if ($g3 == 'B+') $g3 = 3.5;
            if ($g4 == 'B+') $g4 = 3.5;
            if ($g5 == 'B+') $g5 = 3.5;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "B") {
            if ($g1 == 'B') $g1 = 3.0;
            if ($g2 == 'B') $g2 = 3.0;
            if ($g3 == 'B') $g3 = 3.0;
            if ($g4 == 'B') $g4 = 3.0;
            if ($g5 == 'B') $g5 = 3.0;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "C+") {
            if ($g1 == 'C+') $g1 = 2.5;
            if ($g2 == 'C+') $g2 = 2.5;
            if ($g3 == 'C+') $g3 = 2.5;
            if ($g4 == 'C+') $g4 = 2.5;
            if ($g5 == 'C+') $g5 = 2.5;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "C") {
            if ($g1 == "C") $g1 = 2.0;
            if ($g2 == "C") $g2 = 2.0;
            if ($g3 == "C") $g3 = 2.0;
            if ($g4 == "C") $g4 = 2.0;
            if ($g5 == "C") $g5 = 2.0;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "D+") {
            if ($g1 == 'D+') $g1 = 1.5;
            if ($g2 == 'D+') $g2 = 1.5;
            if ($g3 == 'D+') $g3 = 1.5;
            if ($g4 == 'D+') $g4 = 1.5;
            if ($g5 == 'D+') $g5 = 1.5;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "D") {
            if ($g1 == 'D') $g1 = 1.0;
            if ($g2 == 'D') $g2 = 1.0;
            if ($g3 == 'D') $g3 = 1.0;
            if ($g4 == 'D') $g4 = 1.0;
            if ($g5 == 'D') $g5 = 1.0;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "F") {
            if ($g1 == 'F') $g1 = 0;
            if ($g2 == 'F') $g2 = 0;
            if ($g3 == 'F') $g3 = 0;
            if ($g4 == 'F') $g4 = 0;
            if ($g5 == 'F') $g5 = 0;
        }*/
        function Grade_to_Num($grd)
        {
            if ($grd == 'A') $grd = 4.0;
            else if ($grd == 'B+') $grd = 3.5;
            else if ($grd == 'B') $grd = 3.0;
            else if ($grd == 'C+') $grd = 2.5;
            else if ($grd == 'C') $grd = 2.0;
            else if ($grd == 'D+') $grd = 1.5;
            else if ($grd == 'D') $grd = 1.0;
            else  $grd = 0.0;
            return ($grd);
        }
        $g1 = Grade_to_Num($g1);
        $g2 = Grade_to_Num($g2);
        $g2 = Grade_to_Num($g3);
        $g4 = Grade_to_Num($g4);
        $g5 = Grade_to_Num($g5);
        
        echo $g1;
        echo $g2;
        echo $g3;
        echo $g4;
        echo $g5;

        if ($g1 || $g2 || $g3 || $g4 || $g5 != 0) {
            $avg = ($sun1 * $g1) + ($sun2 * $g2) + ($sun3 * $g3) + ($sun4 * $g4) + ($sun5 * $g5);
            $sum = $avg / ($sun1 + $sun2 + $sun3 + $sun4 + $sun5);
        } else $sum = 0;
    }
    ?>
</head>

<body>
    <center>
        <?php if ($sum == 0) { ?>
            <h1>HW4 : Call Grade Period Average (GPA)</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="">วิชาที่ 1 :</label>
                <!--วิชา1-->
                <input type="text" name="sub1" placeholder="ไม่ต้องชื่อเต็ม">

                <label for="">หน่วยกิต :</label>
                <select name="sun1">
                    <option value="0">0</option>
                    <option>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                </select>

                <label>Grade :</label>
                <select name="grade1">
                    <option>F</option>
                    <option>A</option>
                    <option>B+</option>
                    <option>B</option>
                    <option>C+</option>
                    <option>C</option>
                    <option>D+</option>
                    <option>D</option>
                </select><br><br>

                <label for="">วิชาที่ 2 :</label>
                <!--วิชา2-->
                <input type="text" name="sub2" placeholder="ไม่ต้องชื่อเต็ม">
                <label for="">หน่วยกิต :</label>
                <select name="sun2">
                    <option value="0">0</option>
                    <option>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                </select>

                <label for="">Grade :</label>
                <select name="grade2">
                    <option>F</option>
                    <option>A</option>
                    <option>B+</option>
                    <option>B</option>
                    <option>C+</option>
                    <option>C</option>
                    <option>D+</option>
                    <option>D</option>
                </select><br><br>

                <label for="">วิชาที่ 3 :</label>
                <!--วิชา3-->

                <input type="text" name="sub3" placeholder="ไม่ต้องชื่อเต็ม">

                <label for="">หน่วยกิต :</label>
                <select name="sun3">
                    <option value="0">0</option>
                    <option>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                </select>

                <label for="">Grade :</label>
                <select name="grade3">
                    <option>F</option>
                    <option>A</option>
                    <option>B+</option>
                    <option>B</option>
                    <option>C+</option>
                    <option>C</option>
                    <option>D+</option>
                    <option>D</option>
                </select><br><br>

                <label for="">วิชาที่ 4 :</label>
                <!--วิชา4-->
                <input type="text" name="sub4" placeholder="ไม่ต้องชื่อเต็ม">

                <label for="">หน่วยกิต :</label>
                <select name="sun4">
                    <option value="0">0</option>
                    <option>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                </select>

                <label for="">Grade :</label>
                <select name="grade4">
                    <option>F</option>
                    <option>A</option>
                    <option>B+</option>
                    <option>B</option>
                    <option>C+</option>
                    <option>C</option>
                    <option>D+</option>
                    <option>D</option>
                </select><br><br>

                <label for="">วิชาที่ 5 :</label>
                <!--วิชา5-->
                <input type="text" name="sub5" placeholder="ไม่ต้องชื่อเต็ม">

                <label for="">หน่วยกิต :</label>
                <select name="sun5">
                    <option value="0">0</option>
                    <option>1</option>
                    <option>1.5</option>
                    <option>2</option>
                    <option>2.5</option>
                    <option>3</option>
                </select>

                <label for="">Grade :</label>
                <select name="grade5">
                    <option>F</option>
                    <option>A</option>
                    <option>B+</option>
                    <option>B</option>
                    <option>C+</option>
                    <option>C</option>
                    <option>D+</option>
                    <option>D</option>
                </select><br><br>
                <input type="submit" value="คำนวน" name="btnsub">
            </form>
        <?php } else { ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                <h3>
                    <table style="width: 100% ">

                        <tr>
                            <th>วิชา</th>
                            <th>หน่วยกิต</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td><?php echo $sj1; ?></td>
                            <td><?php echo $sun1; ?></td>
                            <td><?php echo $_POST['grade1'] . " ($g1)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj2; ?></td>
                            <td><?php echo $sun2; ?></td>
                            <td><?php echo $_POST['grade2'] . " ($g2)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj3; ?></td>
                            <td><?php echo $sun3; ?></td>
                            <td><?php echo $_POST['grade3'] . " ($g3)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj4; ?></td>
                            <td><?php echo $sun4; ?></td>
                            <td><?php echo $_POST['grade4'] . " ($g4)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj5; ?></td>
                            <td><?php echo $sun5; ?></td>
                            <td><?php echo $_POST['grade5'] . " ($g5)"; ?></td>
                        </tr>
                        <tr>
                            <th>เกรดเฉลี่ยสะสม (GPA)</th>
                            <th colspan="2"><?php echo number_format($sum, 2); ?></th>
                        </tr>

                    </table>
                </h3>
                <br><br>
                <input type="submit" value="Back">
                </from>
            <?php } ?>
    </center>

</body>

</html>