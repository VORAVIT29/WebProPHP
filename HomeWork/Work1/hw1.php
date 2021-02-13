<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW1</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <style>
    body {
        margin: 80px;
        padding: 20px;
        font-family: 'Monda', sans-serif;
    }
    </style>

    <?php
    if (isset($_POST['btnsub'])) {
        $sum = '';
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        if (!empty($_POST['choice'])) {
            switch ($_POST['choice']) {
                case 'Minnimum':
                    $sum = min($num1, $num2, $num3);
                    break;
                case 'Maximum':
                    $sum = max($num1, $num2, $num3);
                    break;
                case 'Average':
                    $sum = ($num1 + $num2 + $num3) / 3;
                    break;
            }
        }
    } else {
        $_SERVER['PHP_SELF'];
        $num1 = "";
        $num2 = "";
        $num3 = "";
    }
    ?>
</head>

<!-- Main -->

<body>
    <center>
        <div>
            <h1>HW1: Find Min Max Average</h1>
        </div>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label>Num 1: </label>
                <input type="text" name="num1" style="width: 20%;" required>
                <br><br><label>Num 2: </label>
                <input type="text" name="num2" style="width: 20%;" required>
                <br><br><label>Num 3: </label>
                <input type="text" name="num3" style="width: 20%;" required>
                <br><br><input type="radio" name="choice" value="Minnimum" required>Minnimum
                <input type="radio" name="choice" value="Maximum">Maximum
                <input type="radio" name="choice" value="Average">Average
                <br><br><button type="submit" name="btnsub">Submit</button>
                <button type="reset">Clear</button>
            </form>
        </div>
        <br><br>
        <?php
        if (isset($_POST['btnsub'])) {
            echo $_POST['choice'] . " number = " . number_format($sum);
        }
        ?>
    </center>
</body>

</html>