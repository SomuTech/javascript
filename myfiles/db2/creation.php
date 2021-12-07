<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EmployeeData";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if($connect->connect_error){
        die("connection failed:".connect-> connect_error);
    }
    else{
        echo "connection successful"."<br>";
    }

    $sql = "CREATE DATABASE EmployeeData";
    if($connect->query($sql) === TRUE){
        echo "database created successfully";
    }
    else{
        echo "error ". $connect->error;
    }
    $connect->close();
    ?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="table.php">
            <input type="submit" value="submit">

        </form>
    </body>
    </html>