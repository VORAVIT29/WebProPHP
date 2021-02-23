<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include('font.php'); ?>
    <title>E3</title>
    <style>
        body {
            font-family: 'Monda', sans-serif;
            margin: 5%;
        }

        table {
            width: 33%;
            border-collapse: collapse;

        }

        td,
        tr {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <center>
        <form action="E2_1.php" method="get">
            <table>
                <tr>
                    <td>ชื่อ นามสกุล ลูกค้า :</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด:</td>
                    <td><input type="number" name="price" required></td>
                </tr>
                <tr>
                    <td>จำนวนงวด ที่ต้องการ:</td>
                    <td>
                        <select name="installment">
                            <option selected disabled>งวด</option>
                            <option>36</option>
                            <option>48</option>
                            <option>60</option>
                            <option>72</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="ซื้อรถ" name="sub"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>