<?php
// PHP code to update the status in the database

// Retrieve the parameters from the query string
$name = $_GET['name'];
$address = $_GET['address'];
$status = $_GET['status'];

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "domestick";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the update statement
$stmt = $conn->prepare("UPDATE clean_details SET status = ? WHERE name = ? AND address = ?");
$stmt->bind_param("sss", $status, $name, $address);

// Execute the update statement
if ($stmt->execute()) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
