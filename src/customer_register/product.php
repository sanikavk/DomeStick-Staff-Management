<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$phone    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'domestick');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



$sql = "SELECT name, email, phone FROM domestick";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print  "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br> - Phone: " . $row["phone"] . "<br>";
      //print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "0 results";
}



$db->close();   
        ?> 



</body>
</html>