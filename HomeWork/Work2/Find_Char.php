<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <title>Find Character</title>

    <style>
        body {
            font-family: 'Monda', sans-serif;
        }

        input[type=text] {
            width: 30%;
        }
    </style>

    <?php
    $letters = "";
    if (isset($_POST['sub']) && !empty($_POST['letters'])) {
        $letters = $_POST['letters'];
        //echo $letters . "<br>";
        $arr = array();
        $i = 0;
        while ($i < strlen($letters)) {
            array_push($arr, ord($letters[$i]));
            $i++;
        }
        $arr_count = array_count_values($arr);
        $arr = array_unique($arr);
        sort($arr);
    }
    ?>
</head>

<body>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h1>HW2-1:Find Character</h1>
            <label>You Text: </label><input type="text" name="letters" value="<?php echo $letters; ?>">
            <br><br>
            <input type="submit" value="Submit" name="sub">
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><input type="button" value="Clear"></a>
        </form>
        <h2>Count Char in Sentence</h2>
        <?php
        if (isset($_POST['sub']) && !empty($_POST['letters'])) {
            for ($index = 0; $index < count($arr); $index++) {

                if ($index % 5 == 0) echo "<br>";

                if ($arr[$index] === 32) {
                    echo "Space = " . $arr_count['' . $arr[$index] . ''] . " , ";
                    continue;
                }

                echo chr($arr[$index]) . " = " . $arr_count["$arr[$index]"] . " , ";
            }
        }
        ?>

    </center>
</body>

</html>