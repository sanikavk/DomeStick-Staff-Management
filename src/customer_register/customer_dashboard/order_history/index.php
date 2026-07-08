<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="table-container">
        <h2> Your Orders </h2>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Equipments Required</th>
            <th>Address</th>
        </tr>
        </thead>
    <tbody>
        <?php
        session_start();
        // Database connection
        $conn = mysqli_connect('localhost', 'root', '', 'domestick');

        // Retrieve user's name based on the username
        $username = $_SESSION['username']; // Replace with the user's username
        $userQuery = "SELECT name FROM user_details WHERE name='$username'";
        $userResult = mysqli_query($conn, $userQuery);
        $userData = mysqli_fetch_assoc($userResult);
        $userName = $userData['name'];

        // Query to retrieve orders for the user
        $query = "SELECT name, date, time, equip, address FROM clean_details WHERE name='$userName'
                  UNION ALL
                  SELECT name, date, time, equip, address FROM bbs_details WHERE name='$userName'
                  UNION ALL
                  SELECT name, date, time, equip, address FROM electric_details WHERE name='$userName'
                  UNION ALL
                  SELECT name, date, time, equip, address FROM plumbing_details WHERE name='$userName'";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['equip'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
        ?>
    </tbody>
    </table>
    </div>
</body>
</html>
