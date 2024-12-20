<?php
$host = 'localhost';
$db = 'online_bakery';
$user = 'root';
$password = '';

// Create a connection
$conn = new mysqli($host, $user, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connected successfully!";
?>
