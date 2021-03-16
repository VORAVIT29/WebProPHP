<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>เลือกผลไม้รวม</title>
</head>

<body>
    <form action="cal.php" method="post">
        <label>เลือกผลไม้ :</label>
        <select name="furit">
            <option value=""></option>
            <option value="orange">ส้ม</option>
            <option value="apple">แอปเปิล</option>
            <option value="banana">กล้วย</option>
        </select><br>
        <label>ความกว้าง :</label>
        <input type="text" name="width" min="100" max="500"><br>
        <label>เพื่อระบุ จำนวน กิโลกรัม : </label><br>
        <input type="radio" name="kg" value="1"><label>1 kg.</label> <br>
        <input type="radio" name="kg" value="2"><label>2 kg.</label><br>
        <input type="radio" name="kg" value="3"><label>3 kg.</label> <br>
        <input type="submit" name="sub">
    </form>
   
</body>

</html>