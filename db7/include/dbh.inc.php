<?php

$servername = "localhost";
$userName = "root";
$dbname = "userinfo";
$password ="";

$conn = mysqli_connect($servername, $userName, $password, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}


?>