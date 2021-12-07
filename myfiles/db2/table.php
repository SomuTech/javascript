<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EmployeeData";

    $connect = new mysqli($servername, $username, $password, $dbname);

    
    $sql = "SELECT * FROM employee";
    $result = $connect->query($sql);
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
        <th>id</th>
          <th>name</th>
          <th>dept</th>
          <th>age</th>
          <th>salary</th>
</tr>
    <?php
    if ($result->num_rows > 0) {
      // output data of each row
     while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <?php echo $row["id"]; ?>
                    </td>
                    <td> 
                        <?php echo $row["name"]; ?>
                    </td>
                    <td>
                        <?php echo $row['dept']; ?>
                    </td>
                    <td> 
                        <?php echo $row['age']; ?>
                    </td>
                    <td>
                        <?php echo $row['salary']; ?>
                    </td>
                </tr>
                <?php } ?>
            </table>

            <form action="dept.php">
                <input type="submit" value="redirect">
            </form>
        </body>
            
        </html>
    <?php
    } else {
      echo "0 results";
    }
    $connect->close();
    ?>