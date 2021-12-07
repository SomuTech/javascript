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

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($username==$row['username'])
            {
            echo "Username already exists";
            }
            else{
                echo "alright"; // don't put it here
            }
        }
        }
        else {
        echo "0 results";
    }


    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pwd')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>