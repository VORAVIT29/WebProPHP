<?php
session_start();
include('server.php');

$error = array();

if (isset($_POST['reg_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pw1 = $_POST['pw1'];
    $pw2 = $_POST['pw2'];

    if (empty($username)) {
        array_push($error, 'Username is requred');
    }
    if (empty($email)) {
        array_push($error, 'Email is requred');
    }
    if (empty($pw1)) {
        array_push($error, 'Password is requred');
    }

    $_SESSION['error'] = $error;

    if ($pw1 != $pw2) {
        array_push($error, 'the two password do not match');
        $_SESSION['error'] = 'the two password do not match';
    }

    $user_check_query = "SELECT * FROM users WHERE username ='$username' AND email ='$email' LIMIT 1";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        if ($result['username'] === $username) {
            array_push($error, 'Username alreay exists');
        }
        if ($result['email'] === $email) {
            array_push($error, 'Email alreay exists');
        }
    }

    if (count($error) == 0) {
        echo $new_password = md5($pw1);

        $sql = "INSERT INTO users (username,email,password) VALUE ('$username','$email','$new_password')";
        mysqli_query($conn, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['suscess'] = 'You are now logged in';
        header('Location: index.php');
    } else {
        header('Location: register.php');
    }
}
