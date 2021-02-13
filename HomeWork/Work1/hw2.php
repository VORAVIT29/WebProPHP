<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW2</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 100px;
            padding: 20px;
            font-family: 'Monda', sans-serif;
        }

        button {
            width: 20%;
            height: 35px;
        }

        input[type=text]:focus {
            background-color: #d3e0ea;
            outline: none;
        }
    </style>

    <?php

    if (isset($_POST['sub'])) {
        $sum = '';
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $op1 = $_POST['choice'];
        $op2 = $_POST['choice2'];

        function Check_Sum() //Open function
        {
            global $num2;
            global $sum;
            if ($sum == '') $sum = $num2;
        }                   //close function

        if ($op1 == 'mul' || $op2 == 'mul' || $op1 == 'div' || $op2 == 'div') {
            if ($op1 == 'mul') {
                Check_Sum();
                $sum = $num1 * $sum;
            } else if ($op1 == 'div') {
                Check_Sum();
                $sum = $num1 / $sum;
            }
            if ($op2 == 'mul') {
                Check_Sum();
                $sum = $sum * $num3;
            } else if ($op2 == 'div') {
                Check_Sum();
                $sum = $sum / $num3;
            }
        }

        if ($op1 == 'add' || $op2 == 'sub' || $op2 == 'add' || $op1 == 'sub') {
            if ($op1 == 'add') {
                Check_Sum();
                $sum = $num1 + $sum;
            } else if ($op1 == 'sub') {
                Check_Sum();
                $sum = $num1 - $sum;
            }
            if ($op2 == 'add') {
                Check_Sum();
                $sum = $sum + $num3;
            } else if ($op2 == 'sub') {
                Check_Sum();
                $sum = $sum - $num3;
            }
        }
    }
    ?>
</head>

<!-- Main -->

<body>
    <center>
        <div>
            <h1>HW2 : Sum of number</h1>
        </div>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label>Num 1: </label>
                <input type="text" name="num1" style="width: 20%; height:30px;" required>
                <br><br>
                <input type="radio" name="choice" value="add" required>+ :
                <input type="radio" name="choice" value="sub">- :
                <input type="radio" name="choice" value="mul">* :
                <input type="radio" name="choice" value="div">/ :
                <br><br><label>Num 2: </label>
                <input type="text" name="num2" style="width: 20%; height:30px;" required>
                <br><br>
                <input type="radio" name="choice2" value="add" required>+ :
                <input type="radio" name="choice2" value="sub">- :
                <input type="radio" name="choice2" value="mul">* :
                <input type="radio" name="choice2" value="div">/ :
                <br><br><label>Num 3: </label>
                <input type="text" name="num3" style="width: 20%; height:30px;" required>
                <br><br><button type="submit" name='sub'>Submit</button>
                <button type="reset">Clear</button>
            </form>
        </div>
        <br><br>
        <font size="6">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                <?php if (isset($_POST['sub'])) {
                    echo "Sum of number = " . number_format($sum, 2);  ?>
                    <br><br>
                    <button type="submit">Reset</button>
                <?php } ?>

            </form>
        </font>
    </center>
</body>

</html>