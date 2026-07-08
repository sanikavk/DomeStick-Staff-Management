<!DOCTYPE html>
<html>
<head>
  <title>Bookings for Cleaning Services</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="table-container">
    <h2>Customer Feedbacks</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Feedback</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // PHP code to fetch and display data from the 'clean_details' table
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "domestick";
          
          $conn = new mysqli($servername, $username, $password, $dbname);
          
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          
          $sql = "SELECT * FROM feedback";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["phno"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["fdback"] . "</td>";
            }
          } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
          }
          
          $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
