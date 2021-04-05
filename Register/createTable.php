<?php
include('server.php');
// sql to create table
$sql = "CREATE TABLE users (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

if ($conn->query($sql) === TRUE) {
echo "Table MyGuests created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>