<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include('font.php'); ?>
    <title>E2_1</title>
    <style>
        body {
            font-family: 'Monda', sans-serif;
            background-color: pink;
        }

        table {
            width: 70%;
            /* border-collapse: collapse;*/
            border: 3px solid black;
            background-color: skyblue;
        }

        tr,
        td {
            border: 2px solid black;
            /*width: ;
            height: ;*/
        }
    </style>
</head>
<?php
if (isset($_GET['sub'])) {
    $name = $_GET['name'];
    $price = $_GET['price'];
    $installment = $_GET['installment'];
    $sum = $price * $installment;
}

function carCheck()
{
    global $sum;

    if ($sum < 749000) {
        echo "<tr><td colspan='2'>ยอดรวมเงินของท่าน ไม่เพียงพอ ที่จะซื้อรถยนต์ได้</td></tr>";
    } else echo "<tr><td colspan='2'>รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้</td></tr>";

    if ($sum >= 749000) {
        echo "<tr><td><img src='img/City.png' alt='City' width='650' height='484'><img src='img/logo-city.png'></td>
        <td style='text-align: center;'>
        ราคา 749,000 บาท</td></tr>";
    }

    if ($sum >= 849000) {
        echo "<tr><td><img src='img/Jazz.png' alt='Jazz' width='533' height='335'><img src='img/logo-jazz.png' width='250' height='100'></td>
        <td style='text-align: center;'>
        ราคา 849,000 บาท</td></tr>";
    }

    if ($sum >= 1149000) {
        echo "<tr><td><img src='img/Civic.png' alt='Civic' width='680' height='489'><img src='img/logo-civic.png' width='200' height='150'></td>
        <td style='text-align: center;'>
        ราคา 1,149,000 บาท</td></tr>";
    }

    if ($sum >= 1799000) {
        echo "<tr><td><img src='img/Accord.png' alt='Accord' width='462' height='450'><img src='img/logo-accord.png'></td>
        <td style='text-align: center;'>
        ราคา 1,799,000 บาท</td></tr>";
    }
}
?>

<body>
    <center>
        <table>
            <tr>
                <td>ชื่อลูกค้า:</td>
                <td><strong><?php echo $name; ?></strong></td>
            </tr>
            <tr>
                <td>ผ่อนงวดละ:</td>
                <td><strong><?php echo number_format($price); ?></strong></td>
            </tr>
            <tr>
                <td>จำนวนงวด:</td>
                <td><strong><?php echo number_format($installment); ?></strong></td>
            </tr>
            <tr>
                <td>ยอดรวมเงิน:</td>
                <td><strong><?php echo number_format($sum); ?></strong></td>
            </tr>
            <?php carCheck(); ?>
            <tr>
                <td colspan="2" style="text-align: center;"><a href="E2.php"><button>Back to Home</button></a></td>
            </tr>
        </table>
    </center>
</body>

</html>