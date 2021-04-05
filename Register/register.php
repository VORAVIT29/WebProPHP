<?php
session_start();
include('server.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php') ?>
        <?php if (isset($_SESSION['error'])) { ?>
        <div class="error">
            <h3>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </h3>
        </div>
    <?php } ?>
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div class="input-group">
        <label for="pw1">Password</label>
        <input type="password" name="pw1">
    </div>
    <div class="input-group">
        <label for="pw2">Confirm Password</label>
        <input type="password" name="pw2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>Already a number? <a href="login.php">Sign in</a></p>
    </form>
</body>

</html>