<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Kape Zebra | Registration Form</title>
        <link rel="stylesheet" href="assests/css/login.css"/>
        <link rel="icon" type="" href="">
    </head>
<body>
    <?php
            require('db.php');
            // When form submitted,to insert values into the database.
            if (isset($_REQUEST['username'])) {
                // removes backslashes
                $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
                $username = mysqli_real_escape_string($conn, $username);
                $name    = stripslashes($_REQUEST['name']);
                $name    = mysqli_real_escape_string($conn, $name);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($conn, $password);
                $query    = "INSERT into `cashier` (cashier_Name, cashier_username, cashier_password)
                            VALUES ('$name', '$username', '" . md5($password) . "')";
                $result   = mysqli_query($conn, $query);
                if ($result) {
                    echo "<script>
                            alert('You are registered successfully.');
                            window.location.href = 'login.php';
                        </script>";
                } else {
                    echo "<div class='form'>
                            <h3>Required fields are missing.</h3><br/>
                        <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                        </div>";
                }
            } else {
?>
        <!--Form Design-->
        <form class="form" action="" method="post">
            <center>
                <img src="" alt="" class="img">
            </center>
            <hr />
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="name" placeholder="Name" required />
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <input type="password" class="login-input" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link">Already have an account? <a href="login.php">Login here!</a></p>
    </form>

    <?php
        }
?>
</body>
</html>