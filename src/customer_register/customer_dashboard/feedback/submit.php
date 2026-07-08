<?php
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'domestick');

// Check if the database connection was successful
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the registration form was submitted
if (isset($_POST['reg_user'])) {
    // Retrieve form data
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $date = mysqli_real_escape_string($db, $_POST['phno']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fdback = mysqli_real_escape_string($db, $_POST['fdback']);

    // Insert data into the database
    $query = "INSERT INTO feedback (name, phno, email, fdback) 
              VALUES ('$name', '$phno', '$email', '$fdback')";

    if (mysqli_query($db, $query)) {
        // Data inserted successfully
        $_SESSION['success'] = "You are now registered";
        mysqli_close($db);
        header('Location: ../main/cust_dashboard.php');
        exit();
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($db);
    }
}

// Close the database connection
mysqli_close($db);
?>
