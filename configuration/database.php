<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Nemanja');
define('DB_PASS', '12345');
define('DB_NAME', 'ranch_harmonija');

// Create connection
$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if not connected
if($connect->connect_error) {
    die('Connection Failed' . $connect->connect_error);
}


?>
