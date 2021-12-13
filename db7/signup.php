<?php
include_once 'header.php';  
?>
<section class="signup-form">
    <h1>signup</h1>
    <form action="include/signup.inc.php" method="post">
        <input type="text" name="name" ><br>
        <input type="email" name="email"><br>
        <input type="text" name="uid"><br>
        <input type="password" name="pwd"><br>
        <input type="password" name="pwdrepeat"><br>
        <button type="submit" value="signup" name="submit">signup</button>
    </form>
    <?php
if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill all the details</p>";
    }
    else if ($_GET["error"]== "invaliduid"){
        echo "<p>Choose a proper username</p>";
    }
    else if ($_GET["error"]== "invalidemail"){
        echo "<p>Choose a proper email </p>";
    }
    else if ($_GET["error"]== "stmtfailed"){
        echo "<p>something went wrong try again</p>";
    }
    else if ($_GET["error"]== "none"){
        echo "<p>sign up successful</p>";
    }
    
}
?>
</section>
</body>
</html>