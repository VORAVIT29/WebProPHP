<?php
if (isset($_GET['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $_GET['nameDB'];


    $nametb = $_GET['nameTB'];
    $name = $_GET['name'];
    $last = $_GET['last'];
    $email = $_GET['email'];


    // Create connection
    $conn1 = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    }

    $sql = "INSERT INTO $nametb (firstname, lastname, email)
    VALUES ('$name', '$last', '$email');";
    
    if ($conn1->multi_query($sql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn1->error;
        header('Location:SQL.php');
    }
    $conn1->close();
    echo '<a href="SQL.php">กลับ</a>';
}

