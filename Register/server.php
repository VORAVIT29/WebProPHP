<?php
$servername="localhost";
$username="root";
$password="1";
$dbname="register_db";

//create Connect
$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn -> set_charset("utf8");

if(!$conn){
    echo("connection failed".mysqli_connect_error());
}
?>