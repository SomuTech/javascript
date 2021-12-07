<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindetails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(16)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
//insert
// $sql = "INSERT INTO users (username, email, password)
// VALUES ('SomuTech', 'somu@gmail.com', 'somu91')";

// if ($conn->query($sql) === TRUE) {
// echo "New record created successfully";
// } else {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }

$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pwd')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

//

//close database
$conn->close();
?>