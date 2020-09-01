<?php
$host = "localhost";
$userName = "root";
$password = "Thedilpasands63.0";
$dbName = "ACT";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
