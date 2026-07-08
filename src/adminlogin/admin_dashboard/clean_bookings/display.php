<!DOCTYPE html>
<html>
<head>
  <title>Bookings for Cleaning Services</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="table-container">
    <h2>Bookings for Cleaning Services</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Equipments Required</th>
          <th>Date</th>
          <th>Time</th>
          <th>Status</th>
          <th>Actions</th>
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
          
          $sql = "SELECT * FROM clean_details";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["address"] . "</td>";
              echo "<td>" . $row["equip"] . "</td>";
              echo "<td>" . $row["date"] . "</td>";
              echo "<td>" . $row["time"] . "</td>";
              echo "<td>" . $row["status"] . "</td>";
              echo "<td><button class='btn-accept'>Accept</button><button class='btn-hold'>Hold</button></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='7'>No data available</td></tr>";
          }
          
          $conn->close();
        ?>
      </tbody>
    </table>
  </div>
  <script>
  // Function to handle the Accept button click
  function handleAcceptClick(name, address, button) {
    alert("Booking accepted for " + name + " at " + address);
    updateStatus(name, address, "accepted"); // Update the status in the database
    updateStatusCell(button, "accepted"); // Update the status in the display table
    button.disabled = true; // Disable the Accept button
  }

  // Function to handle the Hold button click
  function handleHoldClick() {
    alert("Email sent successfully");
  }

  // Function to update the status in the database
  function updateStatus(name, address, status) {
    // Send AJAX request to update the status
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // On successful response, do nothing
      }
    };
    xhr.open("GET", "update_status.php?name=" + encodeURIComponent(name) + "&address=" + encodeURIComponent(address) + "&status=" + encodeURIComponent(status), true);
    xhr.send();
  }

  // Function to update the status cell in the display table
  function updateStatusCell(button, status) {
    var statusCell = button.parentNode.previousSibling; // Get the previous sibling cell which represents the status cell
    statusCell.textContent = status; // Update the status text
  }

  // Add event listeners to the buttons
  var acceptButtons = document.getElementsByClassName("btn-accept");
  var holdButtons = document.getElementsByClassName("btn-hold");

  for (var i = 0; i < acceptButtons.length; i++) {
    acceptButtons[i].addEventListener("click", function() {
      var name = this.parentNode.parentNode.childNodes[0].textContent;
      var address = this.parentNode.parentNode.childNodes[1].textContent;
      handleAcceptClick(name, address, this);
    });
  }

  for (var i = 0; i < holdButtons.length; i++) {
    holdButtons[i].addEventListener("click", handleHoldClick);
  }
</script>

</body>
</html>