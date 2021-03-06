<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW3</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <style>
    body {
        margin: 100px;
        font-family: 'Monda', sans-serif;
    }

    input {
        width: 25%;
        height: 30px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

    td,
    th,
    tr {
        border: 2px solid #dddddd;
        /*ตั้งกรอบ ความหนา 2px สีเทา */
    }

    td {
        text-align: center;
        background-color: skyblue;
    }
    </style>

    <?php
    $final = $mid = $ass = $home = $sum = $grade = $err =  '';

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
        } else $err = "Final มีคะแนนเกิน";

        if ($mid >= 0 && $mid <= 30) {
            $sum = intval($sum) + $mid;
        } else $err = "Mid มีคะแนนเกิน";

        if ($ass >= 0 && $ass <= 20) {
            $sum = intval($sum) + $ass;
        } else $err = "Ass มีคะแนนเกิน";
        if ($home >= 0 && $home <= 20) {
            $sum = intval($sum) + $home;
        } else $err = "HomeWork มีคะแนนเกิน";


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
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h1>HW3 : Call Grade</h1> 
            <h5 style="color:red;"><?php echo $err; ?></h5>
            <label>Final :</label><br>
            <input type="number" name="final" placeholder="คะแนนเต็ม 30" value="<?php echo $inal = ($final <=30)?$_POST['final']:" "; ?>" required><br><br>
            <label>Mid :</label><br>
            <input type="number" name="mid" placeholder="คะแนนเต็ม 30" value="<?php echo $mid = ($mid <=30)?$_POST['mid']:" "; ?>" required><br><br>
            <label>Assign :</label><br>
            <input type="number" name="ass" placeholder="คะแนนเต็ม 20" value="<?php echo $ass = ($ass <=20)?$_POST['ass']:" "; ?>" required><br><br>
            <label>Homework :</label><br>
            <input type="number" name="home" placeholder="คะแนนเต็ม 20" value="<?php echo $home = ($home <=20)?$_POST['home']:" "; ?>" required><br><br>
            <input type="submit" name="sub" value="Call">
            <input type="reset" value="Clear">
        </form>
    </center>
    <?php } ?>


</body>

</html>