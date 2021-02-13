<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lottery</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 10%;
            font-family: 'Monda', sans-serif;
        }

        input[type=number] {
            width: 10%;
        }
    </style>
</head>

<body>
    <center>
        <form action="Result-lottery.php" method="post">
            <h1>โปรแกรม ตรวจ เลขท้าย 2 ตัว</h1>
            <h2>รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนซื้อ x 60 เท่า)</h2>
            <h2>เช่น ถ้าซื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท<br>
                เลขเสี่ยงโชค [0 - 99] <input type="number" name="num" min="0" max="99" required>
            </h2>
            <h4>* ซื้อได้ ตั้งแต่ 10 - 500 บาท เท่านั้น</h4>
            <h1>จำนวนเงินที่คุณต้องการซื้อ [10 - 500 บาท] <input type="number" name="price" min="10" max="500" required></h1>
            <input type="submit" value="ตรวจรางวัล">
        </form>
    </center>

</body>

</html>