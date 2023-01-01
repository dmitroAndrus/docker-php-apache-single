<?php
// phpinfo();
// die();
echo "Hello there, this is a My Website";
echo "<br/>";
// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database user name
$user = 'root';

// Database user password
$pass = 'secretrootpassword';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
$xdebug = true;
if ($xdebug) {
    // Only for Xdebug v3
    // xdebug_info();
    throw new Exception("Oops!...I Did It Again", 1);
}
?>