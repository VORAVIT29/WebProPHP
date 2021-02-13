<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <title>Rssult Lottery</title>

    <style>
        body {
            font-family: 'Monda', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $number = $_POST['num'];
    $price = $_POST['price'];
    $check = false;

    if ($number == $lottery = rand(0, 99)) {
        $massage = "ยินดีด้วยคุณถูกรางวัล";
        $check = true;
    } else $massage = "เสียใจด้วยคุณไม่ถูกรางวัล";


    if ($check) {
        $price = $price * 60;
    }
    ?>
    <h1><?php echo $massage; ?></h1>
    <?php if ($check) { ?>
        <h2>คุณได้รับเงินรางวัล <?php echo $price; ?> บาท</h2>
    <?php } ?>
    <a href="Lottery.php"><button type="submit">Back</button></a>
    <br>
    <h4>รางวัล เลขที่ออก คือ : <?php echo $lottery; ?></h4>
</body>

</html>