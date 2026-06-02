<?php
// Database connection details
$servername = "localhost"; // Replace with your server name (default is 'localhost')
$username = "root"; // Replace with your MySQL username (default is 'root')
$password = ""; // Replace with your MySQL password (default is empty for XAMPP)
$dbname = "beautycare"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
