<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <title>Find Ascii</title>

    <style>
        body {
            font-family: 'Monda', sans-serif;
        }

        input[type=text] {
            width: 30%;
        }
    </style>

    <?php
    $text = "";
    if (isset($_POST['sub']) && $_POST['letters'] != "") {

        $text = $_POST['letters'];
        $length = strlen($text); //Use String
        $arry = array(); //Create Array

        for ($i = 0; $i < $length; $i++) {

            if ($text[$i] !== " " && ord($text[$i]) > 47) {
                //convert letters to Ascii
                $ord = ord($text[$i]);
                //push
                array_push($arry, $ord);
            }
        }

        //Function Not Same Number 
        $arry = array_unique($arry);
        sort($arry);
    }
    ?>

</head>

<body>
    <!-- chr() ,ord()-->
    <center>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>HW2-2:Find Ascii</h1>
            <label>You Text: </label>
            <input type="text" name="letters" value="<?php echo $text; ?>"><br><br>
            <input type="submit" value="Submit" name="sub">
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><input type="button" value="Clear"></a>
        </form>

        <h2>Count Char in Sentence</h2>
        <br><br>

        <?php

        if (!empty($_POST['letters'])) {
            $text = "";
            $in = 0;
            $check = true;

            while ($check) {

                //Check If Array is Empty
                if (empty($arry[$in])) break;

                echo chr($arry[$in]) . " : Ascii = " . $arry[$in] . "<br>";

                $in++;
            }
        }

        ?>
    </center>
</body>

</html>