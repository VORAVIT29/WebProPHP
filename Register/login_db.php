<?php
session_start();
include('server.php');

$error = array();

if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        array_push($error, 'Username is required');
    }

    if (empty($password)) {
        array_push($error, 'Password is required');
    }

    if (count($error) == 0) {
        $new_password = md5($password);
        $query = "SELECT * FROM users WHERE username ='$username' AND password ='$new_password' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'You are now logged in';
            header('Location: index.php');
        } else {
            array_push($error, 'Wrong Username or Password');
            $_SESSION['error'] = 'Wrong Username or Password!';
            $_SESSION['name'] = $username;
            header('Location: login.php');
        }
    } else {
        array_push($error, 'Username & Password is required');
        $_SESSION['error'] = 'Usename & Password is required!';
        $_SESSION['name'] = $username;
        header('Location: login.php');
    }
}
