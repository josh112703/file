<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title></title>
        <link rel="stylesheet" href="assests/css/login.css"/>
        <link rel="icon" type="" href="">
    </head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, to check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);// removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Pang Check if merong exist sa database
        $query    = "SELECT * FROM `cashier` WHERE cashier_username='$username'
                    AND cashier_password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                <h3>Incorrect Username/password.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                </div>";
        }
    } else {
?>
    <!--Form Design-->
    <form class="form" method="post" name="login">
        <center>
            <img src="" alt="" class="img img-fluid">
        </center>
        <hr />
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Register here!</a></p>
        <hr/>
        <?php
            
    }
?>
</body>
</html>