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
            background-color: #f7f7e8;
        }

        input[type=text] {
            width: 20%;
            height: 30px;
        }

        input[type=text]:focus {
            background-color: ;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th,
        tr {
            border: 2px solid black;
        }

        th {
            height: 70px;
            background-color: #fcd1d1;
        }

        td {
            text-align: center;
            height: 30px;
            background-color: #ece2e1;
        }
    </style>
    <?php
    $sum = 0;
    if (isset($_POST['btnsub'])) {
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
        $g3 = Grade_to_Num($g3);
        $g4 = Grade_to_Num($g4);
        $g5 = Grade_to_Num($g5);

        if (($g1 || $g2 || $g3 || $g4 || $g5 != 0) && ($sun1 || $sun2 || $sun3 || $sun4 || $sun5 != 0)) {
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
                <!-- วิชา1 -->
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
                <h1>เกรดเฉลี่ยสะสม (GPA)</h1>
                <h3>
                    <table style="width: 100% ">

                        <tr>
                            <th>วิชา</th>
                            <th>หน่วยกิต</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td><?php echo $sj1 = ($sj1 == "") ? "วิชาที่ 1" : $sj1; ?></td>
                            <td><?php echo $sun1; ?></td>
                            <td><?php echo $_POST['grade1'] . " ($g1)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj2 = ($sj2 == "") ? "วิชาที่ 2" : $sj2; ?></td>
                            <td><?php echo $sun2; ?></td>
                            <td><?php echo $_POST['grade2'] . " ($g2)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj3 = ($sj3 == "") ? "วิชาที่ 3" : $sj3; ?></td>
                            <td><?php echo $sun3; ?></td>
                            <td><?php echo $_POST['grade3'] . " ($g3)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj4 = ($sj4 == "") ? "วิชาที่ 4" : $sj4; ?></td>
                            <td><?php echo $sun4; ?></td>
                            <td><?php echo $_POST['grade4'] . " ($g4)"; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sj5 = ($sj5 == "") ? "วิชาที่ 5" : $sj5; ?></td>
                            <td><?php echo $sun5; ?></td>
                            <td><?php echo $_POST['grade5'] . " ($g5)"; ?></td>
                        </tr>
                        <tr>
                            <th>เกรดเฉลี่ยสะสม (GPA)</th>
                            <th colspan="2"><?php echo number_format($sum, 4); ?> = <?php echo number_format($sum, 2); ?></th>
                        </tr>

                    </table>
                </h3>
                <br><br>
                <input type="submit" value="Back" style="height:50px;width:40%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                </from>
            <?php } ?>
    </center>

</body>

</html>