<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT loginid, firstname, lastname FROM Signupdb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>LoginID</th><th>Name</th><th>Lastname</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["loginid"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
