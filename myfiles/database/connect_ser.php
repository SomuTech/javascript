<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connect = new mysqli($servername, $username, $password);

    if ($connect -> connect_error)
        die("connection failed:" . $connect ->connect_error);

    echo "connected successfully";

    $sql = "CREATE DATABASE loginDetails";
    if ($connect ->query($sql) === TRUE)
    {
        echo "db created successfully";
    }
    else{
        echo "error creating db:" . $connect ->error;
    }

    $connect ->close();
?>