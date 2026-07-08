<?php
$servername = "localhost"; // Replace with your server name or IP address
$username = "your_username"; // Replace with your server username
$password = "your_password"; // Replace with your server password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>
