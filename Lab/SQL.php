<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        legend {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <fieldset>
            <legend>
                <h1>สร้างชื่อฐานข้อมูล</h1>
            </legend>
            <form action="createDataBase.php" method="post">
                เพิ่มชื่อฐานข้อมูล <input type="text" name="nameBase">
                <input type="submit" value="เพิ่ม"><br>
            </form>
            <form action="createDataBase.php" method="get">
                ลบฐานข้อมูล <select name="nameDB">
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
                    <input type="submit" value="ลบ"><br>
            </form>
            </select>



        </fieldset>

        <fieldset>
            <legend>
                <h1>สร้างตาราง</h1>
            </legend>
            <form action="createtable.php" method="post">
                ชื่อฐานข้อมูล <select name="nameDB">
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
                เพิ่มตารางชื่อ <input type="text" name="nametable">
                <input type="submit" value="กด">
            </form>
        </fieldset>

        <fieldset>
            <legend>
                <h1>เพิ่มข้อมูลฐานข้อมูล</h1>
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
                ชื่อ <input type="text" name="name" required> *
                นามสกุล <input type="text" name="last" required> *<br><br>
                E-Mail <input type="email" name="email"><br><br>

                <input type="submit" name="submit" value="ยืนยัน">
                <br><br><br>
            </form>
        </fieldset>
    </center>
</body>

</html>