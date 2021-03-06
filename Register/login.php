<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<link rel="stylesheet" href="style.css">

<body>

    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
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
            <input type="text" name="username" value="<?php echo @$_SESSION['name']; ?>">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign Up</a></p>
    </form>
</body>

</html>