<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default password for MySQL in XAMPP/WAMP
$dbname = "crud_example"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
