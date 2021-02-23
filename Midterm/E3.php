<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include('font.php');?>
    <title>Ex3</title>
    <style>
    body {
        margin: 60px;
        font-family: 'Monda', sans-serif;
    }
    div {
        background-color:skyblue;
    }
    </style>
</head>

<?php
if (isset($_POST['sub'])) {
    $startnum = $_POST['startnum'];
    $endnum = $_POST['endnum'];
    $div = $_POST['divnum'];
    $count = 0;
    $sum = 0;
}

function checkNum($start, $end, $div)
{
    global $count;
    global $sum;
    for ($i = $start; $i <= $end; $i++) {
        if ($i % $div == 0) {
            echo $i . " , ";
            countNum($count);
            sumNum($sum, $i);
        }
    }
}

function countNum(&$count)
{
    $count++;
}

function sumNum(&$sum, $num)
{
    $sum += $num;
}
?>

<body>
    <center>
        <div>
            <table>
                <h1>[ EX3 ]</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <tr>
                        <td><label>ค่าเริ่มต้น:</label></td>
                        <td><input type="number" name="startnum" value="<?php echo $startnum; ?>" required></td>
                    </tr>
                    <tr>
                        <td><label>ค่าสุดท้าย:</label></td>
                        <td><input type="number" name="endnum" value="<?php echo $endnum; ?>" required></td>
                    </tr>
                    <tr>
                        <td><label>ตัวเลขที่นำไปหาร:</label></td>
                        <td><input type="number" name="divnum" value="<?php echo $div; ?>" required></td>
                    </tr>
                    <tr>
                        <td><br><input type="submit" value="checkNum" name="sub"></td>
                    </tr>
                </form>
            </table>
        </div>
        <?php if (isset($_POST['sub'])) {
            echo "<br>";
            checkNum($startnum, $endnum, $div);
            echo "<br>";

            echo "จำนวนที่หารลงตัว = " . $count . " ตัว<br>";
            echo "ผลรวมของตัวเลขที่หารลงตัว = " . number_format($sum) . "<br><br>";
            echo "<a href='" . $_SERVER['PHP_SELF'] . "'><button>Clear</button></a>";
        } ?>
    </center>
</body>

</html>