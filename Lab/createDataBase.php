<?php

include('concect.php');

//สร้าง database ชื่อ 
if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $sql = "DROP DATABASE " . $_GET['nameDB'];
    if (mysqli_query($conn, $sql)) {
        echo "Database Drop successfully";
        echo '<a href="SQL.php">กลับ</a>';
    } else {
        echo "Error Drop database: " . mysqli_error($conn);
        echo '<a href="SQL.php">กลับ</a>';
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") { //สร้้าง database

    $sql = "CREATE DATABASE " . $_POST['nameBase'];
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
        echo '<a href="SQL.php">กลับ</a>';
    } else {
        echo "Error creating database: " . mysqli_error($conn);
        echo '<a href="SQL.php">กลับ</a>';
    }
}
