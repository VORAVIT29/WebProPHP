<?php
//include('concect.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_POST['nameDB'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

// sql to create table
$sql = "CREATE TABLE " . $_POST['nametable'] . " (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
    header('Location:SQL.php');
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
