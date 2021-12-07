<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection


function Americans(){
    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
    $sql = "SELECT fname,lname from student where country='ameria' ";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "Americans are:"."<br>";
        while($row= $result->fetch_assoc()){
            echo $row['fname']." ".$row['lname']."<br>";
        }
    }
    else{
        echo "0 results";
    }
    $conn->close();
}
//mericans();

function High_Salary(){

    $sql = "SELECT fname,lname from student where salary=MAX(salary)";
    $result = $GLOBALS['connect']->query($sql);
    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
            echo $row['fname']." ".$row['lname']."<br>";
        }
    }
    else{
        echo "0 results";
    }
}

//High_Salary();

function fullName(){
    $sql = "select fname,lname from student";
    $result = $GLOBALS['connect']->query($sql);
    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
            echo "name:".strtoupper($row['fname'])." ".strtoupper($row['lname'])."<br>";
        }
    }
    else{
        echo "0 results";
    }
}

//fullName();

function salIncrement(){
    $sql = "UPDATE student SET salary=salary*0.5";

    if ($GLOBALS['connect']->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $GLOBALS['connect']->error;
    }
}

//salIncrement();

function age(){
    $sql = "select fname,lname,age from student where age<18";
    $result = $GLOBALS['connect']->query($sql);
    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
            echo "student is under age"."<br>";
            echo "name:".strtoupper($row['fname'])." ".strtoupper($row['lname'])."<br>";
        }
    }
    else{
        echo "0 results";
    }
}

age();

?>