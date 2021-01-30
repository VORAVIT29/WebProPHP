<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW3</title>
    <style>
        body {
            margin: 100px;
        }

        input {
            width: 25%;
            height: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th,
        tr {
            border: 2px solid #dddddd;
            /*ตั้งกรอบ ความหนา 2px สีเทา */
        }

        td {
            text-align: center;
            background-color:skyblue;
        }
    </style>

    <?php
    $final = $mid = $ass = $home = $sum = $grade = '';

    function Str_to_Int() //ฟังชั่นแปลง
    {
        $GLOBALS['final'] = intval($GLOBALS['final']);
        $GLOBALS['mid'] = intval($GLOBALS['mid']);
        $GLOBALS['ass'] = intval($GLOBALS['ass']);
        $GLOBALS['home'] = intval($GLOBALS['home']);
    }

    if (isset($_POST['sub'])) {

        $final = $_POST['final'];
        $mid = $_POST['mid'];
        $ass = $_POST['ass'];
        $home = $_POST['home'];

        Str_to_Int();

        if ($final >= 0 && $final <= 30) {
            $sum = intval($sum) + $final;
        }

        if ($mid >= 0 && $mid <= 30) {
            $sum = intval($sum) + $mid;
        }

        if ($ass >= 0 && $ass <= 20) {
            $sum = intval($sum) + $ass;
        }
        if ($home >= 0 && $home <= 20) {
            $sum = intval($sum) + $home;
        }


        if ($sum < 50)  $grade = 'F'; //0-49
        else if ($sum < 55) $grade = 'D'; //50-54
        else if ($sum < 60) $grade = 'D+'; //55-59
        else if ($sum < 65) $grade = 'C'; //60-64
        else if ($sum < 70) $grade = 'C+'; //65-69
        else if ($sum < 75) $grade = 'B'; //70-74
        else if ($sum < 80) $grade = 'B+'; //80-84
        else if ($sum <= 100) $grade = 'A'; //85-100
    } else {
        $final = $mid = $ass = $home = $sum = $grade = '';
    }
    ?>
</head>

<body>
    <?php if (isset($_POST['sub']) && (($final <= 30 && $mid <= 30) && ($ass <= 20 && $home <= 20))) { ?>
        <center>
            <font size="4">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                    <table>
                        <tr>
                            <th>Final</th>
                            <th>Midterm</th>
                            <th>Assignment</th>
                            <th>Homework</th>
                            <th>Total Score</th>
                            <th>Your Grade is</th>
                        </tr>
                        <tr>
                            <td><?php echo $final; ?></td>
                            <td><?php echo $mid; ?></td>
                            <td><?php echo $ass; ?></td>
                            <td><?php echo $home; ?></td>
                            <td><?php echo $sum; ?></td>
                            <td><?php echo $grade; ?></td>
                        </tr>
                    </table><br><br>
                    <input type="submit" value="Back">
                </form>
            </font>
        </center>
    <?php } else { ?>
        <?php
        ?>
        <center>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h1>HW3 : Call Grade</h1>
                <label>Final :</label><br>
                <input type="number" name="final" placeholder="คะแนนเต็ม 30" required><br><br>
                <label>Mid :</label><br>
                <input type="number" name="mid" placeholder="คะแนนเต็ม 30" required><br><br>
                <label>Assign :</label><br>
                <input type="number" name="ass" placeholder="คะแนนเต็ม 20" required><br><br>
                <label>Homework :</label><br>
                <input type="number" name="home" placeholder="คะแนนเต็ม 20" required><br><br>
                <input type="submit" name="sub" value="Call">
                <input type="reset" value="Clear">
            </form>
        </center>
    <?php } ?>


</body>

</html>