<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <center>
        <fieldset>
            <legend align="center">
                <h1>สร้างฐานข้อมูล</h1>
            </legend>
            <form action="add_data.php" method="get">
                ชื่อฐานข้อมูล ที่มีอยู่
                <select name="nameDB">
                    <?php
                    include('concect.php');

                    $show = "SHOW DATABASES";
                    $result = mysqli_query($conn, $show);
                    while ($row = mysqli_fetch_row($result)) {
                        if (($row[0] != "information_schema") and ($row[0] != "mysql") and ($row[0] != "performance_schema") and ($row[0] != "test") and ($row[0] != "phpmyadmin")) {
                            echo "<option>" . $row[0] . "</option>";
                        }
                    }

                    ?>
                </select>
                ชื่อตารางข้อมูล <input type="text" name="nameTB"><br><br>
                ชื่อ <input type="text" name="name"> *
                นามสกุล <input type="text" name="last"> *<br><br>
                E-Mail <input type="email" name="email"><br><br>

                <input type="submit" name="submit" value="ยืนยัน">
                <br><br><br>
            </form>
        </fieldset>
    </center>
</body>

</html>