<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        echo '<script>alert("You have log-out!")</script>';
        echo "<script>window.location.href ='login.php'</script>";
    }
?>