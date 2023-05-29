<?php
$servername = $_SERVER['BD_SERVER'];
$database = $_SERVER['BD_NAME'];
$username = $_SERVER['BD_USERNAME'];
$password = $_SERVER['BD_PASSWORD'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// mysqli_close($conn);
?>