<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>H3</title>
    <style>
        legend {
            text-align: center;
        }

        table {
            width: 50%;
        }

        td {
            text-align: center;
        }
    </style>
    <?php
    $model = array("Accord", "Civic", "Jazz", "City"); //รุ่นของรถ
    $price = array(1799000, 1145000, 754000, 749000); //ราคา
    $b = array(2, 2, 4, 4); //ดอกเบี้ย
    ?>
</head>

<body>
    <center>
        <form action="call.php" method="post">
            <fieldset>
                <legend>Car Model</legend>
                <label>เลือกรุ่นรถยนต์</label>
                <select name='car'>
                    <?php
                    for ($i = 0; $i < count($model); $i++) {
                        echo '<option value="' . ($i + 1) . '">' . $model[$i] . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" value="Submit">
                <?php
                echo "<br><br>";
                echo "<table border='bold'><tr>
                    <td>ภาพรถยนต์</td>
                    <td>รุ่นรถยนต์</td>
                    <td>ราคารถยนต์(บาท)</td>
                    <td>อัตราดอกเบี้ย ต่อปี (ร้อยละ,%)</td>
                    </tr>";
                for ($row = 0; $row < 4; $row++) {
                    echo "<tr>";
                    echo '<td><img src="Pic/' . $model[$row] . '.png" alt="" width="180"></td>';
                    echo '<td>' . $model[$row] . '</td>';
                    echo '<td>' . number_format($price[$row]) . '</td>';
                    echo '<td>' . number_format($b[$row], 2) . '</td>';
                    echo "</tr>";
                }
                echo "</table>";
                ?>

            </fieldset>
        </form>
    </center>
</body>

</html>