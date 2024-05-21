<?php
/* Database credentials. Assuming are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'kape_zebra');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 
// Check connection
if ($conn === false) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
?>