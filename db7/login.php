<?php
include_once 'header.php';  
?>
<section class="signup-form">
    <h1>signup</h1>
    <form action="include/login.inc.php" method="post">
        <input type="text" name="uid" ><br>
        <input type="password" name="pwd"><br>
        <button type="submit" name="submit">login</button>
    </form>
    
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Fill all the details</p>";
        }
        else if ($_GET["error"]== "wrong"){
            echo "<p>incorrect</p>";
        }
    }
    ?>
    
</section>

</body>
</html>