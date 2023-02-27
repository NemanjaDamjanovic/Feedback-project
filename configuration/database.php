<?php
define('DB_HOST', ''); // localhost
define('DB_USER', ''); // username
define('DB_PASS', ''); // pass
define('DB_NAME', ''); //database name

// Create connection
$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if not connected
if($connect->connect_error) {
    die('Connection Failed' . $connect->connect_error);
}


?>
