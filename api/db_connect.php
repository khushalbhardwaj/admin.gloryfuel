<?php
// db_connect.php
// Setup for default XAMPP MySQL credentials
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "gloryfuel_db";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database Connection Failed: " . $conn->connect_error]));
}
?>
