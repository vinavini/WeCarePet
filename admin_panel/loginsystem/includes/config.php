<?php
// define('DB_SERVER', 'new.mysql.database.azure.com');
// define('DB_USER', 'azure');
// define('DB_PASS', 'Pranay@302002');
// define('DB_NAME', 'loginsystem');
$server = "wecare.mysql.database.azure.com";
$user = "azure";
$password = "Pranay@302002";
$database = "loginsystem";
$ssl_mode = MYSQLI_CLIENT_SSL;

$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($con, $server, $user, $password, $database, 3306, NULL, $ssl_mode);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


// // Connect to the database
// $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// // Check connection
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// }

// Your database connection is established without explicitly specifying SSL options
?>
