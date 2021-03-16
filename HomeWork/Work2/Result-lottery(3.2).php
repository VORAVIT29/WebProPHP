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

        button {
            width: 100px;
            height: 50px;
        }
        img{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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
    
    <center>
        <h1><?php echo $massage; ?></h1>
        <?php if ($check) { ?>
            <h2>คุณได้รับเงินรางวัล <?php echo number_format($price); ?> บาท</h2>
            <img src="https://media0.giphy.com/media/mIZ9rPeMKefm0/giphy.gif?cid=ecf05e47likjswt63os6ii8ntbb6crku4rko2hywedpojg2a&rid=giphy.gif" alt="Happy">
        <?php } else { ?>
            <img src="https://media2.giphy.com/media/MuztdWJQ4PR7i/giphy.gif?cid=ecf05e47flplump9p0k0ibwx1ck8zf418aiie5y051kb891w&rid=giphy.gif" alt="Sad">
        <?php } ?>
        <br><br><a href="Lottery(3.1).php"><button type="submit">Back</button></a>
        <br>
        <h3>รางวัล เลขที่ออก คือ : <font size="5"><?php echo $lottery; ?></font></h3>
    </center>

</body>

</html>