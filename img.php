<?php 
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = "poohza1234567"; /* Password */
    $dbname = "motor_shop"; /* Database name */
    
    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</html>
<?php
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
        $target_dir = "../shopmoter/img/motorkeep/";
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
            echo "อัพโหลดไฟล์สำเร็จ<br>";      
        } else echo "อัพโหลดไม่สำเร็จ<br>";
    }
?>
<form method="post" action="" enctype='multipart/form-data'>
    <input type='file' name='file' />
    <input type='submit' value='Save name' name='but_upload'>
</form>
</body>