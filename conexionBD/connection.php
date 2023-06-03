<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$hostname = $_ENV['BD_SERVER'];
$database = $_ENV['BD_NAME'];
$username = $_ENV['BD_USERNAME'];
$password = $_ENV['BD_PASSWORD'];

// $hostname = "database-ininbioapp.cxr1cv8i9xxa.us-east-1.rds.amazonaws.com";
// $database = "ininbiowebapp";
// $username = "admin";
// $password = "Ininbio123";

// $hostname = getenv('BD_SERVER');
// $database = getenv('BD_NAME');
// $username = getenv('BD_USERNAME');
// $password = getenv('BD_PASSWORD');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// mysqli_close($conn);
?>