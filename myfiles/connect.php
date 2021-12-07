<?php

$servername = "localhost";
$username = "root";

$password = "";
$dbname = "project";

$conn = new mysqli($servername,$username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
}

// Creating a database named geekdata
// $sql = "CREATE DATABASE project";
// if ($conn->query($sql) === TRUE) {
// 	echo "Database with name project";
// } else {
// 	echo "Error: " . $conn->error;
// }

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
echo $pwd;
$sql = "INSERT INTO student (id,username, email, password) VALUES (NULL,'$username', '$email', '$pwd')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>