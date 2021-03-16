<?php
$furit = $_POST['furit'];
$width = $_POST['width'];
$kg = $_POST['kg'];

if ($furit == 'orange') {
    echo ' <img src="image/or.jpg" alt="" width="' . $width . 'px"><br>';
    echo 'ราคาต่อกิโลกรัม 100/kg<br>จำนวนกิโล : '.$kg.' kg<br>ราคารวม :'.(100 * $kg).' บาท';
} else if ($furit == 'apple') {
    echo ' <img src="image/apple.jpg" alt="" width="' . $width . 'px"><br>';
    echo 'ราคาต่อกิโลกรัม 200/kg<br>จำนวนกิโล : '.$kg.' kg<br>ราคารวม :'.(200 * $kg).' บาท';
} else if ($furit == 'banana') {
    echo ' <img src="image/banana.jpg" alt="" width="' . $width . 'px"><br>';
    echo 'ราคาต่อกิโลกรัม 300/kg<br>จำนวนกิโล : '.$kg.' kg<br>ราคารวม :'.(300 * $kg).' บาท';
}
else {
    header('Location:from.php');
}

echo '<br><a href="from.php">กลับไปหน้าหลัก</a>';
