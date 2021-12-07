<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindetails";

$conn = new mysqli($servername,$username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failure: ". $conn->connect_error);
}

$sql = "SELECT username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"]. "  email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>