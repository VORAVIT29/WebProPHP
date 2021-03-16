<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        table {
            width: 40%;
        }

        td {
            text-align: center;
        }

        input[type=submit] {
            background-color: skyblue;
            width: 100px;
            height: 30px;
        }
    </style>

    <?php
    /*if(isset($_POST['sub'])){
        for ($i=0; $i < $_POST['row'] ; $i++) {
            
        }
    }*/
    ?>
</head>

<body>
    <center>
        <h1>Random</h1>
        <p>สุ่มค่าเลข</p>
        <form action="resulerandom.php" method="post">
            <table>
                <tr>
                    <td>ตำแหน่งของตาราง</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Row :</td>
                    <td> <input type="number" name="row" required></td>
                </tr>
                <tr>
                    <td>Col :</td>
                    <td><input type="number" name="col"></td>
                </tr>
                <tr>
                    <td>เลขที่จะสุ่ม<br></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Start :</td>
                    <td><input type="number" name="start" ></td>
                </tr>
                <tr>
                    <td>End :</td>
                    <td><input type="number" name="end" required></td>
                </tr>
            </table><br><br>
            <input type="submit" value="Show Data" name="sub">
        </form>
    </center>
</body>

</html>