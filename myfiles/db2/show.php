<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EmployeeData";

    $connect = new mysqli($servername, $username, $password, $dbname);

    $userdept=$_POST["dept"];


    $sql = "SELECT name,age,salary FROM employee where dept='$userdept'";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. "  age: " . $row["age"]. " salary ". $row["salary"].  "<br>";
      }
    } else {
      echo "0 results";
    }
    $connect->close();
    ?>