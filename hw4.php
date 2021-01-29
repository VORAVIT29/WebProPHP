<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW4</title>
    <style>
        body {
            margin: 100px;
            padding: 40px;
        }
    </style>
    <?php
    if (isset($_POST['sub'])) {
        $sj1 = $_POST['subject1'];
        $sj2 = $_POST['subject2'];
        $sj3 = $_POST['subject3'];
        $sj4 = $_POST['subject4'];
        $sj5 = $_POST['subject5'];

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
        echo var_dump($_POST['grade1']);

        if ($g1 || $g2 || $g3 || $g4 || $g5 == "A") {
            if ($g1 == 'A') $g1 = 4;
            if ($g2 == 'A') $g2 = 4;
            if ($g3 == 'A') $g3 = 4;
            if ($g4 == 'A') $g4 = 4;
            if ($g5 == 'A') $g5 = 4;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "B+") {
            if ($g1 == 'B+') $g1 = 3.5;
            if ($g2 == 'B+') $g2 = 3.5;
            if ($g3 == 'B+') $g3 = 3.5;
            if ($g4 == 'B+') $g4 = 3.5;
            if ($g5 == 'B+') $g5 = 3.5;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "B") {
            if ($g1 == 'B') $g1 = 3;
            if ($g2 == 'B') $g2 = 3;
            if ($g3 == 'B') $g3 = 3;
            if ($g4 == 'B') $g4 = 3;
            if ($g5 == 'B') $g5 = 3;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "C+") {
            if ($g1 == 'C+') $g1 = 2.5;
            if ($g2 == 'C+') $g2 = 2.5;
            if ($g3 == 'C+') $g3 = 2.5;
            if ($g4 == 'C+') $g4 = 2.5;
            if ($g5 == 'C+') $g5 = 2.5;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "C") {
            if ($g1 == 'C') $g1 = 2;
            if ($g2 == 'C') $g2 = 2;
            if ($g3 == 'C') $g3 = 2;
            if ($g4 == 'C') $g4 = 2;
            if ($g5 == 'C') $g5 = 2;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "D+") {
            if ($g1 == 'D+') $g1 = 1.5;
            if ($g2 == 'D+') $g2 = 1.5;
            if ($g3 == 'D+') $g3 = 1.5;
            if ($g4 == 'D+') $g4 = 1.5;
            if ($g5 == 'D+') $g5 = 1.5;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "D") {
            if ($g1 == 'D') $g1 = 1;
            if ($g2 == 'D') $g2 = 1;
            if ($g3 == 'D') $g3 = 1;
            if ($g4 == 'D') $g4 = 1;
            if ($g5 == 'D') $g5 = 1;
        }
        if ($g1 || $g2 || $g3 || $g4 || $g5 == "F") {
            if ($g1 == 'F') $g1 = 0;
            if ($g2 == 'F') $g2 = 0;
            if ($g3 == 'F') $g3 = 0;
            if ($g4 == 'F') $g4 = 0;
            if ($g5 == 'F') $g5 = 0;
        }

        //$avg=($sun1*$g1)+
        echo $_POST['grade1'] . " = " . $g1 . "<br>";
        echo $_POST['grade2'] . " = " . $g2 . "<br>";
        echo $_POST['grade3'] . " = " . $g3 . "<br>";
        echo $_POST['grade4'] . " = " . $g4 . "<br>";
        echo $_POST['grade5'] . " = " . $g5 . "<br>";
    }
    ?>
</head>

<body>
    <center>
        <h1>HW3 : Call Grade Period Average (GPA)</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="">วิชาที่ 1 :</label>
            <!--วิชา1-->
            
            <select name="subject1" style="width: 30%;height: 20px;">
                <option selected disabled>--เลือก--</option>
                <option>วิทย์</option>
                <option>คณิต</option>
                <option>อังกฤษ</option>
                <option>ภาษาไทย</option>
                <option>คอม</option>
            </select>

            <label for="">หน่วยกิจ :</label>
            <select name="sun1">
                <option>1</option>
                <option>1.5</option>
                <option>2</option>
                <option>2.5</option>
                <option>3</option>
            </select>

            <label>Grade :</label>
            <!--<input type="text"name="grade1">-->
            <select name="grade1">
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C+</option>
                <option>C</option>
                <option>D+</option>
                <option>D</option>
                <option>F</option>
            </select><br><br>

            <label for="">วิชาที่ 2 :</label>
            <!--วิชา2-->
            <select name="subject2" style="width: 30%;height: 20px;">
                <option selected disabled>--เลือก--</option>
                <option>วิทย์</option>
                <option>คณิต</option>
                <option>อังกฤษ</option>
                <option>ภาษาไทย</option>
                <option>คอม</option>
            </select>

            <label for="">หน่วยกิจ :</label>
            <select name="sun2">
                <option>1</option>
                <option>1.5</option>
                <option>2</option>
                <option>2.5</option>
                <option>3</option>
            </select>

            <label for="">Grade :</label>
            <select name="grade2">
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C+</option>
                <option>C</option>
                <option>D+</option>
                <option>D</option>
                <option>F</option>
            </select><br><br>

            <label for="">วิชาที่ 3 :</label>
            <!--วิชา3-->
            <select name="subject3" style="width: 30%;height: 20px;">
                <option selected disabled>--เลือก--</option>
                <option>วิทย์</option>
                <option>คณิต</option>
                <option>อังกฤษ</option>
                <option>ภาษาไทย</option>
                <option>คอม</option>
            </select>

            <label for="">หน่วยกิจ :</label>
            <select name="sun3">
                <option>1</option>
                <option>1.5</option>
                <option>2</option>
                <option>2.5</option>
                <option>3</option>
            </select>

            <label for="">Grade :</label>
            <select name="grade3">
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C+</option>
                <option>C</option>
                <option>D+</option>
                <option>D</option>
                <option>F</option>
            </select><br><br>

            <label for="">วิชาที่ 4 :</label>
            <!--วิชา4-->
            <select name="subject4" style="width: 30%;height: 20px;">
                <option selected disabled>--เลือก--</option>
                <option>วิทย์</option>
                <option>คณิต</option>
                <option>อังกฤษ</option>
                <option>ภาษาไทย</option>
                <option>คอม</option>
            </select>

            <label for="">หน่วยกิจ :</label>
            <select name="sun4">
                <option>1</option>
                <option>1.5</option>
                <option>2</option>
                <option>2.5</option>
                <option>3</option>
            </select>

            <label for="">Grade :</label>
            <select name="grade4">
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C+</option>
                <option>C</option>
                <option>D+</option>
                <option>D</option>
                <option>F</option>
            </select><br><br>

            <label for="">วิชาที่ 5 :</label>
            <!--วิชา5-->
            <select name="subject5" style="width: 30%;height: 20px;">
                <option selected disabled>--เลือก--</option>
                <option>วิทย์</option>
                <option>คณิต</option>
                <option>อังกฤษ</option>
                <option>ภาษาไทย</option>
                <option>คอม</option>
            </select>

            <label for="">หน่วยกิจ :</label>
            <select name="sun5">
                <option>1</option>
                <option>1.5</option>
                <option>2</option>
                <option>2.5</option>
                <option>3</option>
            </select>

            <label for="">Grade :</label>
            <select name="grade5">
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C+</option>
                <option>C</option>
                <option>D+</option>
                <option>D</option>
                <option>F</option>
            </select><br><br>
            <input type="submit" value="คำนวน" name="sub">
        </form>
    </center>

</body>

</html>