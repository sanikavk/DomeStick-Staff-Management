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
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $time = mysqli_real_escape_string($db, $_POST['time']);
    $equip = mysqli_real_escape_string($db, $_POST['equip']);
    $address = mysqli_real_escape_string($db, $_POST['address']);

    // Insert data into the database
    $query = "INSERT INTO electric_details (name, date, time, equip, address) 
              VALUES ('$name', '$date', '$time', '$equip', '$address')";

    if (mysqli_query($db, $query)) {
        // Data inserted successfully
        $_SESSION['success'] = "You are now registered";
        mysqli_close($db);
        header('Location: ../payment_page/pindex.html');
        exit();
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($db);
    }
}

// Close the database connection
mysqli_close($db);
?>
