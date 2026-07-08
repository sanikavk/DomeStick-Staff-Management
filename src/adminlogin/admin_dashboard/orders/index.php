<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="table-container">
    <h2>Orders</h2>
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
        <?php
        // Database connection
        $conn = mysqli_connect('localhost', 'root', '', 'domestick');

        // Query to retrieve data from all tables
        $query = "SELECT name, date, time, equip, address FROM clean_details
                  UNION ALL
                  SELECT name, date, time, equip, address FROM bbs_details
                  UNION ALL
                  SELECT name, date, time, equip, address FROM electric_details
                  UNION ALL
                  SELECT name, date, time, equip, address FROM plumbing_details";

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
    </table>
</div>
</body>
</html>
