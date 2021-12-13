<?php 
function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)){
        $result =true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result =true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result =true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat){
    $result;
    if ($pwd !==$pwdrepeat){
        $result =true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "select * from users where userUid =? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
            return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysql_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "insert into users(userId,userName, userEmail, userUid, userPwd) values(null,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email,$username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit(); 
}

function emptyInputLogin($username, $pwd){
    if(empty($username) || empty($pwd)){
        return true;
    }
    else{
       return false;
    }
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?error=nodata");
        exit(); 
    }

    $pwdHashed = $uidExists['userPwd'];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if($checkPwd == false){
        header("location: ../signup.php?error=wrongpassword");
        exit(); 
    }
    else if($checkPwd == true){
        session_start();
        $_SESSION["userId"] =  $uidExists['userId'];
        $_SESSION["userUid"] =  $uidExists['userUid'];
        header("location: ../index.php");
        exit(); 
    }
}
